<?php

namespace SlimSlider\CtpMeta;

/**
 * The Data class.
 */
class Data
{
    /**
     * Get the items.
     *
     * @var array .
     */
    public $list = [];

    /**
     * Get the post type.
     *
     * @var string .
     */
    public $post_type = 'post';

    /**
     * __construct.
     *
     * @param string $post_type .
     */
    public function __construct( $post_type = null )
    {
        $this->post_type = $post_type;
        $this->list      = $this->items();
    }

    /**
     * Theme Data.
     *
     * @param $post_type
     *
     * @return Data .
     */
    public static function init( $post_type ): self
    {
        return new self( $post_type );
    }

    /**
     * Custom Edit link.
     *
     * @param int    $id    the ID.
     * @param string $class css class items.
     *
     * @return string.
     */
    public static function edit( int $id, $class = '' ): string
    {
        if ( ! current_user_can( 'edit_posts' ) ) {
            return '';
        }
        $text = 'Edit';
        $url  = get_edit_post_link( $id );

        return ' <a class="' . esc_attr( $class ) . '" href="' . esc_url( $url ) . '">' . $text . '</a>';
    }

    /**
     * List of post type items key value pairs.
     *
     * @return array $item
     *
     * @see https://developer.wordpress.org/reference/functions/get_posts/
     */
    public function list(): array
    {
        $items = [];
        foreach ( $this->items() as $item ) {
            $items[ $item->ID ] = $item->post_title;
        }

        return $items;
    }

    /**
     * Get array key if it it set or return null.
     *
     * @param $key
     * @param $data
     *
     * @return null|false|mixed
     */
    public static function getkey( $key, $data )
    {
        if ( ! \is_array( $data ) ) {
            return false;
        }

        if ( isset( $data[ $key ] ) ) {
            return $data[ $key ];
        }

        return null;
    }

    /**
     * Post meta.
     *
     * Retrieves a post meta field for the given post ID.
     *
     * @param $id
     * @param $name the meta name to retreive.
     *
     * @return array .
     *
     * @see https://developer.wordpress.org/reference/functions/get_post_meta/
     */
    public function meta( $id, $name = null )
    {
        if ( \is_null( $name ) ) {
            $name = $this->post_type . '_meta';
        }
        $meta_data              = get_post_meta( $id, $name, true );
        $meta_data['thumbnail'] = get_post_thumbnail_id( $id );
        $meta_data['ID']        = $id;

        return $meta_data;
    }

    /**
     * Retrieves an array of the latest posts,
     * or posts matching the given criteria.
     *
     * @param int $n number of posts to get.
     *
     * @return array Array of post objects or post IDs.
     */
    public function items( $n = -1 ): array
    {
        $args = [
            'numberposts' => $n,
            'post_type'   => $this->post_type,
        ];

        return get_posts( $args );
    }
}

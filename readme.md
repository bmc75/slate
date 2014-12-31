# Slate

Slate is a framework geared towards simplifying common WordPress development tasks such as creating post types or taxonomies.

## Creating a Post Type

Post types can be created by opening the `slate-custom-post-types.php` file under the "slate-custom" folder.

Within the `slate_post_type_init` method simply create a new instance of `Slate_Post_Type`. Example:

```
new Slate_Post_Type('Books');
```

The above code will create a new post type with the label "Books" and the slug as "books".

All arguments available to the [register_post_type](http://codex.wordpress.org/Function_Reference/register_post_type) function are available to the class as a second optional parameter:

```
new Slate_Post_Type('Books', array(
    'supports' => array('title'),
    'labels'   => array(
        'name'          => 'Books',
        'singular_name' => 'Book'
    )
));
```

The above code would create a post type where the edit post page only displays the title field, and the singular name is "Book".


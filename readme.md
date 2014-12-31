# Slate

Slate is a framework geared towards simplifying common WordPress development tasks such as creating post types or taxonomies.

## Creating a Post Type

```
new Slate_Post_Type($name, $args);
```

Post types can be created by opening the `slate-custom-post-types.php` file under the "slate-custom" directory.

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

### Post Type Defaults

A few defaults are set by the Slate_Post_Type class which are different from the WordPress defaults:

* "public" is automatically set to true.
* "supports" is set to support by default title, editor, and thumbnail.

## Creating a Taxonomy

```
new Slate_Taxonomy($name, $post_type, $args);
```

Taxonomies can be created by opening the `slate-custom-taxonomies.php` file under the "slate-custom" directory.

Within the `slate_taxonomy_init` method simply create a new instance of `Slate_Taxonomy`. Example:

```
new Slate_Taxonomy('Book Type', 'books');
```

The above code would create a taxonomy called Book Type for the "books" post type.

All arguments available to the [register_taxonomy](http://codex.wordpress.org/Function_Reference/register_taxonomy) function are available to the class as a third optional parameter:

```
new Slate_Taxonomy('Book Type', 'books', array(
    'hierarchical' => false
));
```

The above code would create a taxonomy where the terms act as tags instead of categories.

### Taxonomy Defaults

A few defaults are set by the Slate_Taxonomy class which are different from the WordPress defaults:

* The `hierarchical` argument is automatically set to true since most times a taxonomy is preferred to act as a category.

## Extra Functionality

Slate provides extra functionality and configuration through the `slate-functions.php` file.

### Theme Support

Slate enables theme support for post thumbnails and theme titles out of the box.

### Slate Debug

Slate will output debug information to your system console using the `_log()` function, which is just a wrapper for `error_log`:

```
_log(array('a' => 'b', 'c' => 'd'));
```
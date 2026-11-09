# CustomPress

[Deutsch](README.md) | **English**

[![Version](https://img.shields.io/badge/Version-1.0.1-2271b1?style=flat-square)](readme.txt)
![PHP](https://img.shields.io/badge/PHP-8.0%2B-777bb4?style=flat-square&logo=php&logoColor=white)
![WordPress](https://img.shields.io/badge/WordPress-up%20to%207.2.4-21759b?style=flat-square&logo=wordpress&logoColor=white)
![ClassicPress](https://img.shields.io/badge/ClassicPress-2.7.4-03768e?style=flat-square)
[![License](https://img.shields.io/badge/License-GPL--2.0--or--later-2ea44f?style=flat-square)](https://www.gnu.org/licenses/gpl-2.0.html)

CustomPress extends ClassicPress with management for custom post types,
taxonomies, and custom fields. It lets you structure and maintain content such
as products, properties, reviews, or events separately from regular blog
posts.

## Features

- Custom post types with configurable labels and options
- Custom hierarchical and non-hierarchical taxonomies
- Support for the built-in category and tag taxonomies
- Custom fields for custom post types
- Embed codes and shortcodes for taxonomies and fields
- Optional theme-template creation for post types
- ClassicPress Multisite support

## Requirements

- ClassicPress 2.7 or later
- PHP 8.0 or later

## Installation

1. Copy the `custompress` directory to
   `wp-content/plugins/custompress/`, or upload the plugin in the
   ClassicPress admin area.
2. Activate CustomPress under **Plugins**.
3. Open the **CustomPress** menu in the admin area.

In a Multisite installation, CustomPress can be activated for individual sites
or network-wide.

## Quick start

### 1. Create a post type

1. Go to **CustomPress -> Content Types**.
2. Select **Add Post Type**.
3. Define its name, labels, and required features.
4. Enable category and/or tag support when needed.
5. Save the post type.

The new post type will then appear as a separate menu item in the ClassicPress
admin area.

### 2. Create a taxonomy

1. Open **CustomPress -> Content Types** and select **Taxonomies**.
2. Choose **Add Taxonomy**.
3. Assign the taxonomy to the appropriate post type.
4. Choose whether it is hierarchical (like categories) or
   non-hierarchical (like tags).
5. Save it.

### 3. Create custom fields

1. Open **Custom Fields**.
2. Select **Add Custom Field**.
3. Set the field name, field type, and target post type.
4. Save it.

The field is then displayed in the editing screen for the selected post type.

## Categories, taxonomies, and pagination

Category, tag, and custom taxonomy archives automatically include every public
post type registered for the requested taxonomy. This also applies to matching
post types created by other plugins.

For example, if both regular posts and a custom post type support the `News`
category, both are shown under `/category/news/`. Pagination is based on the
complete matching result set, so subsequent pages continue to work correctly.

Dedicated archives from other plugins remain unchanged. A product, event, or
other custom-post-type archive is not modified by CustomPress.

## Display settings

Under **CustomPress -> Settings**, you can configure which post types appear
on these views:

- Blog/home page
- Static front page
- Date and author archives
- Search results

The `default` option leaves the corresponding view on the standard post types.
Category, tag, and taxonomy archives are deliberately not restricted by this
option; they follow the taxonomy assignment instead.

## Templates and output

CustomPress can create template files for custom post types. You can then place
the embed codes provided in the admin area into the theme loop.

The `ct` shortcode is available for custom fields:

```text
[ct id="_ct_my_field" property="value"]
```

Available properties include `value`, `title`, and `description`. For archive
or other multi-post views, render the value in the theme, because the shortcode
can only output the final post in the loop.

## Multisite

When network-activated, three models are available:

1. **Network-wide content types:** All sites use the same types.
2. **Site-specific content types:** Every site manages its own types.
3. **Combined:** Network-wide types are available, and sites may add their
   own types.

The related options are available under **CustomPress -> Settings** in the
network administration area.

## Notes

- Choose post-type and taxonomy names carefully before publishing. Renaming
  them later can affect existing URLs, queries, and content.
- Public post types need a suitable theme template when they require a custom
  layout.
- Do not set theme directories to insecure permissions such as `777`. Maintain
  templates through version control, SFTP, or your secure deployment process.

## Support and updates

- Project site: <https://power-source.github.io/custompress/>
- Discussions: <https://github.com/Power-Source/custompress/discussions>
- Releases: <https://github.com/Power-Source/custompress/releases>

## License

CustomPress is licensed under the
[GNU General Public License, Version 2](https://www.gnu.org/licenses/gpl-2.0.html).

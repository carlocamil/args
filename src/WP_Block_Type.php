<?php

declare(strict_types=1);

namespace Args;

/**
 * Arguments for the `WP_Block_Type()` class in WordPress.
 *
 * @link https://developer.wordpress.org/reference/classes/WP_Block_Type/
 */
class WP_Block_Type extends Shared\Base {
	/**
	 * Human-readable block type label.
	 */
	public string $title;

	/**
	 * Block type category classification, used in search interfaces to arrange block types by category.
	 */
	public string $category;

	/**
	 * Setting parent lets a block require that it is only available when nested within the specified blocks.
	 *
	 * @var mixed[]
	 */
	public array $parent;

	/**
	 * Block type icon.
	 */
	public string $icon;

	/**
	 * A detailed block type description.
	 */
	public string $description;

	/**
	 * Additional keywords to produce block type as result in search interfaces.
	 *
	 * @var mixed[]
	 */
	public array $keywords;

	/**
	 * The translation textdomain.
	 */
	public string $textdomain;

	/**
	 * Alternative block styles.
	 *
	 * @var mixed[]
	 */
	public array $styles;

	/**
	 * Supported features.
	 *
	 * @var mixed[]
	 */
	public array $supports;

	/**
	 * Structured data for the block preview.
	 *
	 * @var mixed[]
	 */
	public array $example;

	/**
	 * Block type render callback.
	 *
	 * @var callable
	 */
	public $render_callback;

	/**
	 * Block type attributes property schemas.
	 *
	 * @var mixed[]
	 */
	public array $attributes;

	/**
	 * Context values inherited by blocks of this type.
	 *
	 * @var mixed[]
	 */
	public array $uses_context;

	/**
	 * Context provided by blocks of this type.
	 *
	 * @var mixed[]
	 */
	public array $provides_context;

	/**
	 * Block type editor script handle.
	 */
	public string $editor_script;

	/**
	 * Block type front end script handle.
	 */
	public string $script;

	/**
	 * Block type editor style handle.
	 */
	public string $editor_style;

	/**
	 * Block type front end style handle.
	 */
	public string $style;
}
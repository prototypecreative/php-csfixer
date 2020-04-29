<?php

/*
* This document has been generated with
* https://mlocati.github.io/php-cs-fixer-configurator/#version:2.16.3|configurator
* you can change this configuration by importing this file.
*/
return [
    // PHP arrays should be declared using the configured syntax.
    'array_syntax' => true,
    // Binary operators should be surrounded by space as configured.
    'binary_operator_spaces' => true,
    // There MUST be one blank line after the namespace declaration.
    'blank_line_after_namespace' => true,
    // Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
    'blank_line_after_opening_tag' => true,
    // Class, trait and interface elements must be separated with one blank line.
    'class_attributes_separation' => true,
    // A single space or none should be between cast and variable.
    'cast_spaces' => true,
    // The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented.
    'braces' => true,
    // An empty line feed must precede any configured statement.
    'blank_line_before_statement' => true,
    // Whitespace around the keywords of a class, trait or interfaces definition should be one space.
    'class_definition' => true,
    // Concatenation should be spaced according configuration.
    'concat_space' => true,
    // The PHP constants `true`, `false`, and `null` MUST be written using the correct casing.
    'constant_case' => true,
    // Equal sign in declare statement should be surrounded by spaces or not following configuration.
    'declare_equal_normalize' => true,
    // Spaces should be properly placed in a function declaration.
    'function_declaration' => true,
    // PHP code must use the long `<?php` tags or short-echo `<?=` tags and not other tag variations.
    'full_opening_tag' => true,
    // PHP code MUST use only UTF-8 without BOM (remove BOM).
    'encoding' => true,
    // The keyword `elseif` should be used instead of `else if` so that all control keywords look like single words.
    'elseif' => true,
    // Ensure single space between function's argument and its typehint.
    'function_typehint_space' => true,
    // Include/Require and file path should be divided with a single space. File path should not be placed under brackets.
    'include' => true,
    // Pre- or post-increment and decrement operators should be used if possible.
    'increment_style' => true,
    // Code MUST use configured indentation type.
    'indentation_type' => true,
    // Class static references `self`, `static` and `parent` MUST be in lower case.
    'lowercase_static_reference' => true,
    // PHP keywords MUST be in lower case.
    'lowercase_keywords' => true,
    // Cast should be written in lower case.
    'lowercase_cast' => true,
    // All PHP files must use same line ending.
    'line_ending' => true,
    // Magic constants should be referred to using the correct casing.
    'magic_constant_casing' => true,
    // Magic method definitions and calls must be using the correct casing.
    'magic_method_casing' => true,
    // In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma. Argument lists MAY be split across multiple lines, where each subsequent line is indented once. When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line.
    'method_argument_space' => true,
    // Function defined by PHP should be called using the correct casing.
    'native_function_casing' => true,
    // There should not be blank lines between docblock and the documented element.
    'no_blank_lines_after_phpdoc' => true,
    // There should not be empty PHPDoc blocks.
    'no_empty_phpdoc' => true,
    // There should not be any empty comments.
    'no_empty_comment' => true,
    // There should be no empty lines after class opening brace.
    'no_blank_lines_after_class_opening' => true,
    // All instances created with new keyword must be followed by braces.
    'new_with_braces' => true,
    // The closing `? >` tag MUST be omitted from files containing only PHP.
    'no_closing_tag' => true,
    // There must be a comment when fall-through is intentional in a non-empty case body.
    'no_break_comment' => true,
    // Native type hints for functions should use the correct case.
    'native_function_type_declaration_casing' => true,
    // Remove useless semicolon statements.
    'no_empty_statement' => true,
    // Removes extra blank lines and/or blank lines following configuration.
    'no_extra_blank_lines' => true,
    // Remove leading slashes in `use` clauses.
    'no_leading_import_slash' => true,
    // The namespace declaration line shouldn't contain leading whitespace.
    'no_leading_namespace_whitespace' => true,
    // Single-line whitespace before closing semicolon are prohibited.
    'no_singleline_whitespace_before_semicolons' => true,
    // Short cast `bool` using double exclamation mark should not be used.
    'no_short_bool_cast' => true,
    // Operator `=>` should not be surrounded by multi-line whitespaces.
    'no_multiline_whitespace_around_double_arrow' => true,
    // Either language construct `print` or `echo` should be used.
    'no_mixed_echo_print' => true,
    // When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis.
    'no_spaces_after_function_name' => true,
    // There MUST NOT be spaces around offset braces.
    'no_spaces_around_offset' => true,
    // There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
    'no_spaces_inside_parenthesis' => true,
    // Removes `@param`, `@return` and `@var` tags that don't provide any useful information.
    'no_superfluous_phpdoc_tags' => true,
    // There MUST be no trailing spaces inside comment or PHPDoc.
    'no_trailing_whitespace_in_comment' => true,
    // In array declaration, there MUST NOT be a whitespace before each comma.
    'no_whitespace_before_comma_in_array' => true,
    // Unused `use` statements must be removed.
    'no_unused_imports' => true,
    // Remove trailing whitespace at the end of non-blank lines.
    'no_trailing_whitespace' => true,
    // PHP single-line arrays should not have trailing comma.
    'no_trailing_comma_in_singleline_array' => true,
    // Removes unneeded curly braces that are superfluous and aren't part of a control structure's body.
    'no_unneeded_curly_braces' => true,
    // Removes unneeded parentheses around control statements.
    'no_unneeded_control_parentheses' => true,
    // Remove trailing commas in list function calls.
    'no_trailing_comma_in_list_call' => true,
    // Remove trailing whitespace at the end of blank lines.
    'no_whitespace_in_blank_line' => true,
    // Array index should always be written by using square braces.
    'normalize_index_brace' => true,
    // There should not be space before or after object `T_OBJECT_OPERATOR` `->`.
    'object_operator_without_whitespace' => true,
    // Ordering `use` statements.
    'ordered_imports' => true,
    // Docblocks should have the same indentation as the documented subject.
    'phpdoc_indent' => true,
    // PHPDoc annotation descriptions should not be a sentence.
    'phpdoc_annotation_without_dot' => true,
    // All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically.
    'phpdoc_align' => true,
    // PHPUnit annotations should be a FQCNs including a root namespace.
    'php_unit_fqcn_annotation' => true,
    // Fix PHPDoc inline tags, make `@inheritdoc` always inline.
    'phpdoc_inline_tag' => true,
    // Classy that does not inherit must not have `@inheritdoc` tags.
    'phpdoc_no_useless_inheritdoc' => true,
    // The type of `@return` annotations of methods returning a reference to itself must the configured one.
    'phpdoc_return_self_reference' => true,
    // `@access` annotations should be omitted from PHPDoc.
    'phpdoc_no_access' => true,
    // No alias PHPDoc tags should be used.
    'phpdoc_no_alias_tag' => true,
    // Scalar types should always be written in the same form. `int` not `integer`, `bool` not `boolean`, `float` not `real` or `double`.
    'phpdoc_scalar' => true,
    // Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other, and annotations of a different type are separated by a single blank line.
    'phpdoc_separation' => true,
    // `@package` and `@subpackage` annotations should be omitted from PHPDoc.
    'phpdoc_no_package' => true,
    // A PHP file without end tag must always end with a single empty line feed.
    'single_blank_line_at_eof' => true,
    // Cast `(boolean)` and `(integer)` should be written as `(bool)` and `(int)`, `(double)` and `(real)` as `(float)`, `(binary)` as `(string)`.
    'short_scalar_cast' => true,
    // Sorts PHPDoc types.
    'phpdoc_types_order' => true,
    // `@var` and `@type` annotations of classy properties should not contain the name.
    'phpdoc_var_without_name' => true,
    // PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
    'phpdoc_trim' => true,
    // Docblocks should only be used on structural elements.
    'phpdoc_to_comment' => true,
    // PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
    'phpdoc_summary' => true,
    // The correct case must be used for standard PHP types in PHPDoc.
    'phpdoc_types' => true,
    // Removes extra blank lines after summary and after description in PHPDoc.
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    // Single line `@var` PHPDoc should have proper spacing.
    'phpdoc_single_line_var_spacing' => true,
    // There should be one or no space before colon, and one space after it in return type declarations, according to configuration.
    'return_type_declaration' => true,
    // Instructions must be terminated with a semicolon.
    'semicolon_after_instruction' => true,
    // There should be exactly one blank line before a namespace declaration.
    'single_blank_line_before_namespace' => true,
    // There MUST NOT be more than one property or constant declared per statement.
    'single_class_element_per_statement' => true,
    // There MUST be one use keyword per declaration.
    'single_import_per_statement' => true,
    // Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
    'single_line_after_imports' => true,
    // Each trait `use` must be done as single statement.
    'single_trait_insert_per_statement' => true,
    // Convert double quotes to single quotes for simple strings.
    'single_quote' => true,
    // Throwing exception must be done in single line.
    'single_line_throw' => true,
    // Single-line comments and multi-line comments with only one line of actual content should use the `//` syntax.
    'single_line_comment_style' => true,
    // Removes extra spaces between colon and case value.
    'switch_case_space' => true,
    // Fix whitespace after a semicolon.
    'space_after_semicolon' => true,
    // Increment and decrement operators should be used if possible.
    'standardize_increment' => true,
    // Replace all `<>` with `!=`.
    'standardize_not_equals' => true,
    // A case should be followed by a colon and not a semicolon.
    'switch_case_semicolon_to_colon' => true,
    // Arrays should be formatted like function/method arguments, without leading or trailing single line space.
    'trim_array_spaces' => true,
    // PHP multi-line arrays should have a trailing comma.
    'trailing_comma_in_multiline_array' => true,
    // Standardize spaces around ternary operator.
    'ternary_operator_spaces' => true,
    // Unary operators should be placed adjacent to their operands.
    'unary_operator_spaces' => true,
    // Visibility MUST be declared on all properties and methods; `abstract` and `final` MUST be declared before the visibility; `static` MUST be declared after the visibility.
    'visibility_required' => true,
    // In array declaration, there MUST be a whitespace after each comma.
    'whitespace_after_comma_in_array' => true,
    // Write conditions in Yoda style (`true`), non-Yoda style (`false`) or ignore those conditions (`null`) based on configuration.
    'yoda_style' => true,
];

<?php

$finder = PhpCsFixer\Finder::create()
                           ->exclude(
                               [
                                   '.build/',
                                   '.docker/',
                                   '.github/',
                               ]
                           )
                           ->ignoreDotFiles(true)
                           ->in(__DIR__)
                           ->name('.php-cs-fixer.php');

$config = new PhpCsFixer\Config();

$config
    ->setFinder($finder)
    ->setRules([
                   'phpdoc_var_without_name'                     => true,
                   'single_line_comment_style'                   => true,
                   '@PSR12'                                      => true,
                   'array_syntax'                                => ['syntax' => 'short'],
                   'concat_space'                                => ['spacing' => 'one'],
                   'include'                                     => true,
                   'new_with_braces'                             => true,
                   'no_empty_statement'                          => true,
                   'no_leading_import_slash'                     => true,
                   'no_leading_namespace_whitespace'             => true,
                   'no_multiline_whitespace_around_double_arrow' => true,
                   'multiline_whitespace_before_semicolons'      => true,
                   'no_unused_imports'                           => true,
                   'no_whitespace_in_blank_line'                 => true,
                   'ordered_imports'                             => true,
                   'ternary_operator_spaces'                     => true,
                   // rz
                   'phpdoc_order'                                => true,
                   'phpdoc_types'                                => true,
                   'phpdoc_add_missing_param_annotation'         => true,
                   'single_quote'                                => true,
                   'standardize_not_equals'                      => true,
                   'ternary_to_null_coalescing'                  => true,
                   'no_empty_comment'                            => true,
                   'no_empty_phpdoc'                             => true,
                   'return_type_declaration'                     => true,
                   'no_useless_return'                           => true,
                   // rz 2
                   'align_multiline_comment'                     => true,
                   'array_indentation'                           => true,
                   'binary_operator_spaces'                      => true,
                   'blank_line_after_opening_tag'                => true,
                   'blank_line_before_statement'                 => ['statements' => ["return", "throw", "try"]],
                   'cast_spaces'                                 => true,
                   'class_attributes_separation'                 => [
                       'elements' => [
                           'const'        => 'none',
                           'method'       => 'one',
                           'property'     => 'one',
                           'trait_import' => 'none',
                           'case'         => 'none'
                       ]
                   ],
                   'explicit_indirect_variable'                  => true,
                   'explicit_string_variable'                    => true,
                   'function_typehint_space'                     => true,
                   'lowercase_cast'                              => true,
                   'lowercase_static_reference'                  => true,
                   'method_chaining_indentation'                 => true,
                   'multiline_comment_opening_closing'           => true,
                   'native_function_casing'                      => true,
                   'no_blank_lines_after_class_opening'          => true,
                   'no_blank_lines_after_phpdoc'                 => true,
                   'no_extra_blank_lines'                        => [
                       'tokens' => [
                           "break",
                           "continue",
                           "curly_brace_block",
                           "extra",
                           "parenthesis_brace_block",
                           "return",
                           "square_brace_block",
                           "throw",
                           "use"
                       ]
                   ],
                   'no_short_bool_cast'                          => true,
                   'no_singleline_whitespace_before_semicolons'  => true,
                   'no_spaces_around_offset'                     => true,
                   'no_superfluous_elseif'                       => true,
                   'no_useless_else'                             => true,
                   'object_operator_without_whitespace'          => true,
                   'ordered_class_elements'                      => [
                       'order' => [
                           "use_trait",
                           "constant_public",
                           "constant_protected",
                           "constant_private",
                           "property_public",
                           "property_protected",
                           "property_private",
                           "construct",
                           "destruct",
                           "magic",
                           "phpunit",
                           "method_public",
                           "method_protected",
                           "method_private"
                       ]
                   ],
                   'phpdoc_align'                                => ['align' => 'left'],
                   'phpdoc_indent'                               => true,
                   'phpdoc_return_self_reference'                => true,
                   'phpdoc_scalar'                               => true,
                   'phpdoc_single_line_var_spacing'              => true,
                   'phpdoc_trim'                                 => true,
                   'phpdoc_types_order'                          => [
                       'null_adjustment' => 'always_last'
                   ],
                   //'phpdoc_var_without_name' => false,
                   'return_assignment'                           => true,
                   //'single_line_comment_style' => false,
                   'trailing_comma_in_multiline'                 => true,
                   'trim_array_spaces'                           => true,
                   'unary_operator_spaces'                       => true,
               ]);

return $config;
<?php

// folders to fix
// In terminal if you dont want to use the --config flag
$finder = (new PhpCsFixer\Finder())
  ->in([
    'app',
  ]);


use PhpCsFixer\Config;

$config = new Config();return $config
  ->setUsingCache(true)
  ->setRules([
    '@PSR2' => true,
    'indentation_type' => true,
    'blank_line_before_statement' => [
      'statements' => ['continue', 'break', 'return'],
    ],
    'new_with_braces' => false,
    'array_indentation' => true,
    'array_syntax' => ['syntax' => 'short'],
    'combine_consecutive_unsets' => true,
    'multiline_whitespace_before_semicolons' => true,
    'single_quote' => true,
    'blank_line_before_statement' => true,
    'braces' => [
      'allow_single_line_closure' => true,
    ],
    'concat_space' => ['spacing' => 'one'],
    'declare_equal_normalize' => true,
    'function_typehint_space' => true,
    'include' => true,
    'lowercase_cast' => true,
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_spaces_around_offset' => true,
    'no_unused_imports' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'object_operator_without_whitespace' => true,
    'single_blank_line_before_namespace' => true,
    'ternary_operator_spaces' => true,
    'trailing_comma_in_multiline' => true,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'binary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
    'single_trait_insert_per_statement' => false,
    'unary_operator_spaces' => true,
    'binary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
    'single_trait_insert_per_statement' => false
  ])
  ->setIndent("\t")
  ->setFinder($finder)
  ->setLineEnding("\n");

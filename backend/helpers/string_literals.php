<?php

function class_to_table_name($className) {
    // Convert CamelCase to snake_case
    $snakeCase = strtolower(preg_replace('/(?<!^)(?=[A-Z])/', '_', $className));


    // Check for irregular pluralization
    $baseName = rtrim($snakeCase, 's'); // Remove trailing 's' for lookup
    

    // Default pluralization (for most cases)
    if (substr($baseName, -1) === 'y' && !preg_match('/[aeiou]y$/', $baseName)) {
        // Change 'y' to 'ies' for consonant + 'y'
        return substr($baseName, 0, -1) . 'ies';
    } elseif (substr($baseName, -1) === 's' || substr($baseName, -1) === 'x' || preg_match('/(ch|sh)$/', $baseName)) {
        // Add 'es' for words ending in s, x, ch, or sh
        return $snakeCase . 'es';
    }

    // Default case: add 's'
    return $snakeCase . 's';
}

?>

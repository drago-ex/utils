<?php declare(strict_types=1);

/**
 * Test: Drago\Utils\CaseConverter
 */

use Drago\Utils\CaseConverter;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


test('Camel case and mixed forms are converted to snake case', function () {
	foreach (['CaseCase', 'caseCase', 'Case_Case', 'case_Case', 'CASE_CASE', 'CASE_case', 'case_CASE'] as $input) {
		Assert::same('case_case', CaseConverter::snakeCase($input), $input);
	}
});


test('Snake case input is returned unchanged', function () {
	Assert::same('already_snake', CaseConverter::snakeCase('already_snake'));
	Assert::same('', CaseConverter::snakeCase(''));
});


test('Digits are followed by a word boundary', function () {
	Assert::same('version2_name', CaseConverter::snakeCase('version2Name'));
	Assert::same('address_line1', CaseConverter::snakeCase('addressLine1'));
});


test('Acronyms are kept together', function () {
	Assert::same('html_parser', CaseConverter::snakeCase('HTMLParser'));
	Assert::same('user_id', CaseConverter::snakeCase('userID'));
	Assert::same('parse_xml_file', CaseConverter::snakeCase('parseXMLFile'));
});


test('Snake case is converted to camel case', function () {
	foreach (['case_case', 'CASE_CASE', 'Case_Case', 'case__case'] as $input) {
		Assert::same('caseCase', CaseConverter::camelCase($input), $input);
	}

	Assert::same('version2Name', CaseConverter::camelCase('version2_name'));
	Assert::same('addressLine1', CaseConverter::camelCase('address_line1'));
});


test('Input without an underscore is returned unchanged', function () {
	Assert::same('alreadyCamel', CaseConverter::camelCase('alreadyCamel'));
	Assert::same('sample', CaseConverter::camelCase('sample'));
	Assert::same('', CaseConverter::camelCase(''));
});


test('Snake case column names survive the conversion there and back', function () {
	foreach (['used_count', 'created_at', 'minimum_order_amount', 'version2_name', 'address_line1', 'id'] as $column) {
		Assert::same($column, CaseConverter::snakeCase(CaseConverter::camelCase($column)), $column);
	}
});

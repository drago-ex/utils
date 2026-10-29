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

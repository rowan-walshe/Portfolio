<?php

require '../php/functions.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testDisplayAboutMeTextSuccess()
    {
        $expected = '<p>test data</p>';
        $input = [['content' => 'test data']];
        $case = displayAboutMeText($input);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayAboutMeTextFailure()
    {
        $expected = "";
        $input = [['thing'=>'words']];
        $case = displayAboutMeText($input);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayAboutMeTextMalform()
    {
        $input = 'string';
        $this->expectException(TypeError::class);
        displayAboutMeText($input);
    }

    public function testDisplayAboutMeQuoteSuccess()
    {
        $expected = '<p class=\'contentEmphasisLine\'>test data<span class=\'contentQuote\'>"</span></p>';
        $input = [['content' => 'test data']];
        $case = displayAboutMeQuote($input);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayAboutMeQuoteFailure()
    {
        $expected = "";
        $input = [['thing'=>'words']];
        $case = displayAboutMeQuote($input);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayAboutMeQuoteMalform()
    {
        $input = 'string';
        $this->expectException(TypeError::class);
        displayAboutMeQuote($input);
    }

    public function testRemoveWhitespaceSuccess()
    {
        $expected = "string";
        $input = "  string  ";
        $case = removeWhitespace($input);
        $this->assertEquals($expected, $case);
    }

    public function testCheckTextExistsSuccess()
    {
        $expected = true;
        $input = "";
        $case = checkTextExists($input);
        $this->assertEquals($expected, $case);
    }

    public function testCheckTextExistsFailure()
    {
        $expected = false;
        $input = "string";
        $case = CheckTextExists($input);
        $this->assertEquals($expected, $case);
    }

    public function testCheckTextExistsMalform()
    {
        $input = ['thing'];
        $this->expectException(TypeError::class);
        CheckTextExists($input);
    }

    public function testAddAboutMeSuccessFalse()
    {
        $expected = "<p>Please add content of up to 400 characters</p>";
        $input = false;
        $case = AddAboutMeSuccess($input);
        $this->assertEquals($expected, $case);
    }

    public function testAddAboutMeSuccessTrue()
    {
        $expected = "<p>Your text has been added</p>";
        $input = true;
        $case = AddAboutMeSuccess($input);
        $this->assertEquals($expected, $case);
    }

    public function testAddAboutMeSuccessMalform()
    {
        $input = ['thing'];
        $this->expectException(TypeError::class);
        addAboutMeSuccess($input);
    }

    public function testEditAboutMeTextAndQuoteSuccess()
    {
        $expected = "<option value=1>test data</option>";
        $input = [['id'=>1, 'content'=>'test data']];
        $case = editAboutMeTextAndQuote($input);
        $this->assertEquals($expected, $case);
    }

    public function testEditAboutMeTextAndQuoteFailure()
    {
        $expected = '<option value=></option>';
        $input = [['thing'=>'words']];
        $case = editAboutMeTextAndQuote($input);
        $this->assertEquals($expected, $case);
    }

    public function testEditAboutMeTextAndQuoteMalform()
    {
        $input = 'string';
        $this->expectException(TypeError::class);
        editAboutMeTextAndQuote($input);
    }

    public function testDisplayAboutTextToEditSuccess()
    {
        $expected = 'test data';
        $input = [['id'=>1, 'content'=>'test data']];
        $case = displayAboutTextToEdit($input);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayAboutTextToEditFailure()
    {
        $expected = "";
        $input = [['thing'=>'words']];
        $case = displayAboutTextToEdit($input);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayAboutTextToEditMalform()
    {
        $input = 'string';
        $this->expectException(TypeError::class);
        displayAboutTextToEdit($input);
    }

    public function testDisplaySubmitEditButtonSuccess()
    {
        $expected = '<input type="submit" value="Edit text">';
        $case = displaySubmitEditButton();
        $this->assertEquals($expected, $case);
    }
}
    ?>

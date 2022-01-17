import static com.kms.katalon.core.checkpoint.CheckpointFactory.findCheckpoint
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import static com.kms.katalon.core.testobject.ObjectRepository.findWindowsObject
import com.kms.katalon.core.checkpoint.Checkpoint as Checkpoint
import com.kms.katalon.core.cucumber.keyword.CucumberBuiltinKeywords as CucumberKW
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as Mobile
import com.kms.katalon.core.model.FailureHandling as FailureHandling
import com.kms.katalon.core.testcase.TestCase as TestCase
import com.kms.katalon.core.testdata.TestData as TestData
import com.kms.katalon.core.testng.keyword.TestNGBuiltinKeywords as TestNGKW
import com.kms.katalon.core.testobject.TestObject as TestObject
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WS
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUI
import com.kms.katalon.core.windows.keyword.WindowsBuiltinKeywords as Windows
import internal.GlobalVariable as GlobalVariable
import org.openqa.selenium.Keys as Keys

WebUI.openBrowser('')

WebUI.navigateToUrl('http://localhost/')

WebUI.click(findTestObject('Object Repository/Page_Moodle/a_Log in'))

WebUI.setText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Username_username'), 'nmthu')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Password_password'), 'zm/yZ1suVYniggK+4Jo9ew==')

WebUI.click(findTestObject('Object Repository/Page_Moodle Log in to the site/button_Log in'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_Dashboard/span_IntroCS'), 'IntroCS')

WebUI.click(findTestObject('Object Repository/Page_Dashboard/span_IntroCS'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Course Introduction to Computer Science/span_Participants'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/span_Participants'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_IntroCS Participants/select_Select                        Keywor_4b957f'), 
    0)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Participants/select_Select                        Keywor_4b957f'), 
    'keywords', true)

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_IntroCS Participants/input_Keyword_form_autocomplete_input-16424_537ecb'), 
    0)

WebUI.setText(findTestObject('Object Repository/Page_IntroCS Participants/input_Keyword_form_autocomplete_input-16424_537ecb'), 
    'Quach Minh Khoi')

WebUI.click(findTestObject('Object Repository/Page_IntroCS Participants/button_Apply filters'))

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Participants/select_Quach Minh Khoi'), 'Quach Minh Khoi', 
    true)

WebUI.click(findTestObject('Object Repository/Page_IntroCS Participants/button_Apply filters_1'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_IntroCS Participants/a_Quach Minh Khoi'), 0)

WebUI.click(findTestObject('Object Repository/Page_IntroCS Participants/a_Quach Minh Khoi'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Introduction to Computer Science Perso_363e4d/span_Message'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Introduction to Computer Science Perso_363e4d/span_Message'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Introduction to Computer Science Perso_363e4d/textarea_Use enter to send_form-control bg-light'), 
    0)

WebUI.setText(findTestObject('Object Repository/Page_Introduction to Computer Science Perso_363e4d/textarea_Use enter to send_yui_3_17_2_1_164_db8682'), 
    'Hello')

WebUI.click(findTestObject('Object Repository/Page_Introduction to Computer Science Perso_363e4d/i__icon fa fa-paper-plane fa-fw'))

WebUI.closeBrowser()


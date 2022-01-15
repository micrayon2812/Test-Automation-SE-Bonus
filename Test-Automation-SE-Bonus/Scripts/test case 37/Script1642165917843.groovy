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

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/span_Participants'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_IntroCS Participants/select_Select                        Keywor_5ec06e'), 
    0)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Participants/select_Select                        Keywor_5ec06e'), 
    'roles', true)

WebUI.click(findTestObject('Object Repository/Page_IntroCS Participants/span_'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_IntroCS Participants/li_Teacher'), 'Teacher')

WebUI.click(findTestObject('Object Repository/Page_IntroCS Participants/li_Teacher'))

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Participants/select_No roles                    Course c_9336fa'), 
    '3', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Participants/select_No roles                    Course c_9336fa'), 
    '3', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Participants/select_No roles                    Course c_9336fa'), 
    '3', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Participants/select_No roles                    Course c_9336fa'), 
    '3', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Participants/select_No roles                    Course c_9336fa'), 
    '3', true)

WebUI.click(findTestObject('Object Repository/Page_IntroCS Participants/button_Apply filters'))

WebUI.click(findTestObject('Object Repository/Page_IntroCS Participants/section_Participants                       _399b9a'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_IntroCS Participants/a_Tran Minh Triet'), 'Tran Minh Triet')

WebUI.click(findTestObject('Object Repository/Page_IntroCS Participants/a_Tran Minh Triet'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Introduction to Computer Science Perso_abbbf2/span_Message'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Introduction to Computer Science Perso_abbbf2/span_Message'))

WebUI.setText(findTestObject('Object Repository/Page_Introduction to Computer Science Perso_abbbf2/textarea_Use enter to send_yui_3_17_2_1_164_06a8dd'), 
    'Hello')

WebUI.click(findTestObject('Object Repository/Page_Introduction to Computer Science Perso_abbbf2/i__icon fa fa-paper-plane fa-fw'))

WebUI.closeBrowser()


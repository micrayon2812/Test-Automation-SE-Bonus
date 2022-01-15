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

WebUI.setText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Username_username'), 'tmtriet')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Password_password'), 'NMz1A57fMJEpXGm/T4cXeQ==')

WebUI.click(findTestObject('Object Repository/Page_Moodle Log in to the site/button_Log in'))

WebUI.verifyElementText(findTestObject('Page_Dashboard/span_IntroCS'), 'IntroCS')

WebUI.click(findTestObject('Object Repository/Page_Dashboard/span_IntroCS'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Course Introduction to Computer Science/button_Turn editing on'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/button_Turn editing on'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_Course Introduction to Computer Science/a_Topic 1'), 'Topic 1')

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/span_Add an activity or resource'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Course Introduction to Computer Science/img_Recommended_icon icon'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/img_Recommended_icon icon'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Editing Assignment/input_Upon activity completion_submitbutton2'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Editing Assignment/input_Upon activity completion_submitbutton2'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_Editing Assignment/div_- You must supply a value here'), 
    '- You must supply a value here.')

WebUI.closeBrowser()


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

WebUI.setText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Username_username'), 'admin')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Password_password'), 'r6H/uPCyCbQX7sAf5E1f3g==')

WebUI.click(findTestObject('Object Repository/Page_Moodle Log in to the site/button_Log in'))

WebUI.verifyElementText(findTestObject('Page_Dashboard/a_Introduction to Computer Science'), 'Introduction to Computer Science')

WebUI.click(findTestObject('Page_Dashboard/a_Introduction to Computer Science'))

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/span_Calendar'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/button_New event'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/button_New event'))

WebUI.setText(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/input_Event title_name'), 
    'Seminar for Final Examination')

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/select_1        2        3        4        _45ea30'), 
    '26', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/select_00        01        02        03    _f6e37b'), 
    '0', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/select_00        01        02        03    _f6e37b_1'), 
    '0', true)

WebUI.click(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/button_Save'))

WebUI.click(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/span_Seminar for Final Examination'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/button_Delete'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/button_Delete'))

WebUI.click(findTestObject('Object Repository/Page_IntroCS Calendar Detailed month view J_1643b4/button_Delete event'))

WebUI.closeBrowser()


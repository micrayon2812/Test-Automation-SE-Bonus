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

WebUI.verifyElementText(findTestObject('Object Repository/Page_Dashboard/span_IntroCS'), 'IntroCS')

WebUI.click(findTestObject('Object Repository/Page_Dashboard/span_IntroCS'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_Course Introduction to Computer Science/h1_Introduction to Computer Science'), 
    'Introduction to Computer Science')

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/button_Turn editing on'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_Course Introduction to Computer Science/a_Topic 1'), 'Topic 1')

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/span_Add an activity or resource'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Course Introduction to Computer Science/a_Quiz'), 0)

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/a_Quiz'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_Editing Quiz/label_Name_1'), 'Name')

WebUI.setText(findTestObject('Object Repository/Page_Editing Quiz/input_Name_name'), 'Quiz 1')

WebUI.verifyElementClickable(findTestObject('Object Repository/Page_Editing Quiz/a_Timing'))

WebUI.click(findTestObject('Object Repository/Page_Editing Quiz/a_Timing'))

WebUI.click(findTestObject('Object Repository/Page_Editing Quiz/input_Enable_timeopenenabled'))

WebUI.click(findTestObject('Object Repository/Page_Editing Quiz/input_Enable_timecloseenabled'))

WebUI.click(findTestObject('Object Repository/Page_Editing Quiz/input_Enable_timelimitenabled'))

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Editing Quiz/select_1        2        3        4        _45ea30'), 
    '14', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Editing Quiz/select_1        2        3        4        _45ea30_1'), 
    '20', true)

WebUI.setText(findTestObject('Object Repository/Page_Editing Quiz/input_Time_timelimitnumber'), '20')

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Editing Quiz/select_weeks        days        hours      _586059'), 
    '1', true)

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Editing Quiz/input_Upon activity completion_submitbutton'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Editing Quiz/input_Upon activity completion_submitbutton'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_IntroCS Quiz 1/button_Back to the course'), 0)

WebUI.click(findTestObject('Object Repository/Page_IntroCS Quiz 1/button_Back to the course'))

WebUI.verifyElementVisible(findTestObject('Object Repository/Page_Course Introduction to Computer Science/li_Quiz 1                                  _38519f'))

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/a_Edit'))

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/span_Delete'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Course Introduction to Computer Science/button_Yes'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/button_Yes'))

WebUI.verifyElementNotVisible(findTestObject('Object Repository/Page_Course Introduction to Computer Science/li_Quiz 1                                  _38519f'))

WebUI.click(findTestObject('Page_Course Introduction to Computer Science/span_IntroCS'))

WebUI.waitForElementVisible(findTestObject('Page_Course Introduction to Computer Science/button_Turn editing off'), 0)

WebUI.click(findTestObject('Page_Course Introduction to Computer Science/button_Turn editing off'))

WebUI.closeBrowser()


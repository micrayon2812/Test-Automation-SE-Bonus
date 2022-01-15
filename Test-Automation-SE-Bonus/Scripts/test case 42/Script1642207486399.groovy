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

WebUI.click(findTestObject('Object Repository/Page_Dashboard/span_IntroCS'))

WebUI.verifyElementPresent(findTestObject('Object Repository/Page_Course Introduction to Computer Science/span_Announcements Forum'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Course Introduction to Computer Science/span_Announcements Forum'))

WebUI.click(findTestObject('Object Repository/Page_Announcements/a_Add a new topic'))

WebUI.setText(findTestObject('Object Repository/Page_Announcements/input_Subject_subject'), 'Announcement for Tet holiday')

WebUI.setText(findTestObject('Object Repository/Page_Announcements/div_Wish you have a nice break'), '<p dir="ltr" style="text-align: left;">Wish you have a nice break</p>')

WebUI.click(findTestObject('Object Repository/Page_Announcements/div_Message'))

WebUI.waitForElementPresent(findTestObject('Object Repository/Page_Announcements/input_Cancel_advancedadddiscussion'), 0)

WebUI.click(findTestObject('Object Repository/Page_Announcements/input_Cancel_advancedadddiscussion'))

WebUI.waitForElementPresent(findTestObject('Object Repository/Page_IntroCS Add a new topic/a_Display period'), 0)

WebUI.click(findTestObject('Object Repository/Page_IntroCS Add a new topic/a_Display period'))

WebUI.click(findTestObject('Object Repository/Page_IntroCS Add a new topic/input_Enable_timestartenabled'))

WebUI.click(findTestObject('Object Repository/Page_IntroCS Add a new topic/input_Enable_timeendenabled'))

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Add a new topic/select_1        2        3        4        _45ea30'), 
    '24', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Add a new topic/select_00        01        02        03    _f6e37b'), 
    '0', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Add a new topic/select_00        01        02        03    _f6e37b_1'), 
    '1', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Add a new topic/select_00        01        02        03    _f6e37b_1'), 
    '0', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Add a new topic/select_1        2        3        4        _45ea30_1'), 
    '14', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Add a new topic/select_January        February        March_78ea2e'), 
    '2', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Add a new topic/select_00        01        02        03    _f6e37b_1_2'), 
    '0', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_IntroCS Add a new topic/select_00        01        02        03    _f6e37b_1_2_3'), 
    '0', true)

WebUI.rightClick(findTestObject('Object Repository/Page_IntroCS Add a new topic/input__submitbutton'))

WebUI.click(findTestObject('Object Repository/Page_IntroCS Add a new topic/input__submitbutton'))

WebUI.click(findTestObject('Object Repository/Page_Announcements/p_Your post was successfully added'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_Announcements/p_Your post was successfully added_1'), 'Your post was successfully added.')

WebUI.verifyElementText(findTestObject('Object Repository/Page_Announcements/p_You have 30 mins to edit it if you want t_c2beca'), 
    'You have 30 mins to edit it if you want to make any changes.')

WebUI.verifyElementVisible(findTestObject('Object Repository/Page_Announcements/button_Timed'), FailureHandling.STOP_ON_FAILURE)

WebUI.click(findTestObject('Object Repository/Page_Announcements/a_Announcement for Tet holiday'))

WebUI.click(findTestObject('Object Repository/Page_IntroCS Announcement for Tet holiday/a_Delete'))

WebUI.click(findTestObject('Object Repository/Page_IntroCS/button_Continue'))

WebUI.verifyElementVisible(findTestObject('Object Repository/Page_Announcements/div_Discussion deleted'), FailureHandling.STOP_ON_FAILURE)

WebUI.closeBrowser()


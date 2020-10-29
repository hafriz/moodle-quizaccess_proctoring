<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Strings for the quizaccess_proctoring plugin.
 *
 * @package    quizaccess_proctoring
 * @copyright  2020 Brain Station 23
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

$string['proctoringrequired_help'] = 'If you enable this option, students will not be able to start an attempt until they have ticked a check-box confirming that they are aware of the policy on webcam.';
$string['proctoringrequiredoption'] = 'must be acknowledged before starting an attempt';
$string['notrequired'] = 'not required';
$string['privacy:metadata'] = 'We do not share any personal data with third parties.';
$string['proctoringheader'] = '<strong>To continue with this quiz attempt you must open your webcam, and it will take some of your pictures randomly during the quiz.</strong>';
$string['proctoringlabel'] = 'I agree with the validation process.';
$string['proctoringstatement'] = 'This exam requires webcam validation process. You must allow the webcam AND check the remember this webcam option checkbox. Your webcam will take some random pictures during the quiz <br />(Please allow your web browser to access your camera).';
$string['camhtml'] = '<div class="camera"> <video id="video">Video stream not available.</video></div> <canvas id="canvas" style="display:none;"> </canvas> <img style="display:none;" id="photo" alt="The screen capture will appear in this box."/>';
$string['pluginname'] = 'Proctoring';
$string['quizaccess_proctoring'] = 'Quizaccess Proctoring';
$string['youmustagree'] = 'You must agree to validate your identity before continue.';
$string['proctoringrequired'] = 'Webcam identity validation';
$string['notpermissionreport'] = 'Identity validation reports are disabled for you.';
$string['eprotroringreports'] = 'Identity validation report for: ';
$string['eprotroringreportsdesc'] = 'In this report you will find all the images of the students which are taken during the exam. Now you can validate their identity, like their profile picture and webcam photos.';
$string['status'] = 'Validation status';
$string['dateverified'] = 'Date and time';
$string['actions'] = 'Actions';
$string['picturesreport'] = 'View proctoring report';
$string['webcampicture'] = 'webcampicture';
$string['picturesusedreport'] = 'There are the pictures captured during the quiz.';
$string['setting:proctoringreconfigureproctoring'] = 'Auto-configure Proctoring';
$string['setting:proctoringreconfigureproctoring_desc'] = 'If enabled, users who navigate to the quiz take webcam pictures';
$string['setting:autoreconfigureproctoring_desc'] = 'If enabled, users who navigate to the quiz take webcam pictures';
$string['setting:autoreconfigureproctoring'] = 'Auto-configure Proctoring';
$string['event:takescreenshot'] = 'Taken a screenshot';
$string['event:screenshotcreated'] = 'A new screenshot was created';
$string['event:screenshotupdated'] = 'Screenshot was updated';


$string['privacy:metadata:courseid'] = 'The ID of the course that use proctoring.';
$string['privacy:metadata:quizid'] = 'The ID of the Quiz that use proctoring.';
$string['privacy:metadata:webcampicture'] = 'The name of picture that has been taken by the proctoring.';
$string['privacy:metadata:status'] = 'The Status of the proctoring.';
$string['timemodified'] = 'Last modified';
$string['privacy:metadata:quizaccess_proctoring_logs'] = 'Moodle Quiz access Proctoring logs table that store user\'s picture.';

$string['proctoring:sendcamshot'] = 'Proctoring send webcam photo';
$string['proctoring:getcamshots'] = 'Proctoring get webcam photos';
$string['proctoring:viewreport'] = 'Proctoring view report';
$string['name'] = 'Student Name';
$string['webcampicture'] = 'Captured Pictures';
$string['openwebcam'] = 'Allow your webcam to continue';

$string['privacy:quizaccess_proctoring_logs'] = 'QuizAccess Proctoring logs';
$string['privacy:core_files'] = 'QuizAccess Proctoring webcam pictures';
$string['privacy:metadata:core_files'] = 'The Quiz Access stores users picture which has been shot by the webcam during quiz attempt.';


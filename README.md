DM-AsteriskGUI
==============

Digital-Merge Asterisk GUI using the **Muhammad Usman's Charisma Template** at http://usman.it/free-responsive-admin-template/

This project create a Web GUI to administrate the DIGIUM's Asterisk PBX using RealTime Static(MySQL) for the most of configurations.

You can download an ISO containing the OS + Asterisk + Web GUI here https://code.google.com/p/dm-asterisk-distro/

Check the Screenshots here https://code.google.com/p/dm-asterisk-distro/


##Features:##


**Access:**

* Login page for Admininstrator(index.php).
* Login page for Users(user/userlog.php).



####Administrator Features####


**All settings in the Database**

* Dashboard(main.php).
* SIP Devices Administration(sip.php).
* IAX2 Device Administration(iax.php).
* Voicemail Administration(voicemail.php).
* Conference Administartion(meetme.php).
* Queue Administration(queue.php).
* Pin Codes Administration(pinset.php).


**Configuration Files taken from the source conf file(NOT in the Database)**

* Dialplan Configuration(dialplan.php).
* IAX2 Configuration(iaxf.php).
* SIP Configuration(sipf.php).
* DAHDI Configuration(dahdif.php).
* Call Detail Records(cdr.php Using the Database).
* File Manager for Recordings(recordings.php Using elfinder plugin for handling).
* WebRTC2SIP Administration Page(webrtc2sip.php Functional only if you have the webrtc2sip media gateway).
* TLS Certificate Administration.(tls.php A GUI for create TLS certificates for Secure SIP connections).
* Voicemail HTML Template(vmt.php for deliver a HTML mail with the VM information).





####User Features####

**All in user.php:**

* Retreive Voicemails.
* Enable and Edit Followme Settings.
* WebRTC Phone Using user's device settings.
* Call Detail Recordings of user's device.
+ Administrate Voicemail Settings(password, name, email).

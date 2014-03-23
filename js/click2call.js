var _sipStack;
var _registerSession;
var _callSession;

var readyCallback = function(e) {
		console.log("ready... creating sipstack");
		
		if (!SIPml.isWebRtcSupported()) {
                	alert("Your browser is too old to make the test :(. Please download the latest google chrome or firefox nightly");
			return;
		}

                createSipStack();
            }

var errorCallback = function(e) {
                console.error('Failed to initialize the engine: ' + e.message);
	   }

var eventListener = function(e) {
	console.log("new event: " + e.type);	

	
	if (e.type == 'failed_to_start' || e.type == 'transport_error') {
		$('#statusLabel').html("Failed to connect to SIP server");
	 	$('#statusLabel').attr('class', 'label label-important');
		return;
	}
	else if (e.type == 'started') {
		$('#statusLabel').html("Logging in...");
		login();
	}
	else if(e.type == 'connected') {
		$('#statusLabel').html("Connected");

		$('#callBtn').removeClass('hide');
		
	}

	$('#statusLabel').attr('class', 'label label-inverse');
	
}

function login()
{
	_registerSession = _sipStack.newSession('register', {
                    events_listener: { events: '*', listener: eventListener } // optional: '*' means all events
                });

       _registerSession.register();
}

function createSipStack()
{
	_sipStack	= new SIPml.Stack({
		                  realm: "asterisk",
                		  impi: "infowebrtc",
		                  impu: "sip:infowebrtc@pbxdm.ath.cx:5060",
                		  password: "dminfo_call98$!",
		                  display_name: "WebRTC Info",
                		  websocket_proxy_url: "ws://pbxdm.ath.cx:10060",
//		                  outbound_proxy_url: (window.localStorage ? window.localStorage.getItem('org.doubango.expert.sip_outboundproxy_url') : null),
                		  enable_rtcweb_breaker: true,
		                  events_listener: { events: '*', listener: eventListener },
                		  sip_headers: [
					{ name: 'User-Agent', value: 'IM-client/OMA1.0 sipML5-v1.2013.01.14' },
        	                   	{ name: 'Organization', value: 'Doubango Telecom' }
                    		  ]
                		});
	_sipStack.start();
}


SIPml.init(readyCallback, errorCallback);

var ready = SIPml.isWebRtc4AllSupported();
                alert(ready);


function call()
{	
	_callSession = _sipStack.newSession('call-audio', {
                    audio_remote: document.getElementById('audio-remote'),
                    events_listener: { events: '*', listener: callEventHandler } // optional: '*' means all events
                });

	_callSession.call('0000');
}

function hangUp()
{
	_callSession.hangup({events_listener: { events: '*', listener: callEventHandler }});

	showCallButton(true);	
}

function showCallButton(show)
{
	if (!show) {
		$('#callBtn').attr('class', 'hide');
		$('#hangUpBtn').attr('class', 'btn btn-danger');
		
		return;
	}
	
	$('#callStatusLabel').attr('class', 'hide');
	$('#hangUpBtn').attr('class', 'hide');
	$('#callBtn').attr('class', 'btn btn-primary');

}

function callEventHandler(e) 
{
	console.log("on call:" + e.type);
		
	if (e.type == 'connecting') {
		$('#callStatusLabel').html("Calling...");
                $('#callStatusLabel').attr('class', 'label label-warning');
	
		showCallButton(false);
	}
	else if(e.type == 'terminated')
	{
		showCallButton(true);
	}
	else if (e.type == 'connected') {
		$('#callStatusLabel').html("Setting up audio...");
//                $('#callStatusLabel').attr('class', 'label label-warning');
	}
	else if (e.type == 'm_stream_audio_remote_added') {
		$('#callStatusLabel').html("Ready...");
                $('#callStatusLabel').attr('class', 'hide');
	}

	

}

 


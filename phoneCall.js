//set TWILIO_ACCOUNT_SID=AC3b5a12998e3aaf9e0869600a70c5f996; 

function twilioCall(){
    const accountSid = process.env.TWILIO_ACCOUNT_SID || 'AC3b5a12998e3aaf9e0869600a70c5f996';
    const authToken = process.env.TWILIO_AUTH_TOKEN || '07d06e8073c3386e684e6067e5daf8fe';
    console.log(accountSid,authToken);
    const client = require('twilio')(accountSid, authToken);
    
    client.calls
          .create({
             url: 'http://demo.twilio.com/docs/voice.xml',
             to: '+14258983356',
             from: '+12534001759'
           })
          .then(call => console.log(call.sid));     
}

twilioCall();
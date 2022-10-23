//set TWILIO_ACCOUNT_SID=AC3b5a12998e3aaf9e0869600a70c5f996; 

function twilioCall(){
    const accountSid = process.env.TWILIO_ACCOUNT_SID || 'AC3b5a12998e3aaf9e0869600a70c5f996';
    const authToken = process.env.TWILIO_AUTH_TOKEN || '07d06e8073c3386e684e6067e5daf8fe';
    console.log(accountSid,authToken);
    const client = require('twilio')(accountSid, authToken);
    
    client.calls
          .create({
             twiml: '<Response><Say voice="alice">Hi!</Say><Pause length="1"/><Say voice="alice">Are you busy right now? I really need your help</Say><Pause length="1"/><Say voice="alice">Can you come over to my house right now its super urgent</Say><Pause length="2"/></Response>',
             to: '+14258983356',
             from: '+12534001759'
           })
          .then(call => console.log(call.sid));     
}

twilioCall();
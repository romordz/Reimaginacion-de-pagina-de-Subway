function sendMail(encodedData){

    function convertToJSON(data) {
        var result = {};
        var pares = data.split('&');
        pares.forEach(function(par) {
            var [key, value] = par.split('=');
            result[decodeURIComponent(key)] = decodeURIComponent(value || '');
        });
        return result;
    }

    // Convierte URL-encoded a JSON object
    var UserInfo = convertToJSON(encodedData);

    var MailValues = 
    {
        name: UserInfo.Nombre,
        email: UserInfo.Correo
    };

    const serviceID = "service_1niwp4n";
    const templateID = "template_keyxb8h";

    emailjs.send(serviceID, templateID, MailValues).catch(function(err){console.log(err)});
}
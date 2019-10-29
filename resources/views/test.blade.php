<!DOCTYPE html>
<html>
<head>
    <title>SpeedOf.Me API Consumer - Advanced Sample Page</title>
    <meta name="viewport" content="user-scalable=no, width=device-width, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="//speedof.me/api/api.js" type="text/javascript"></script>
</head>
<body>
    <h2>SpeedOf.Me API Consumer - Advanced Sample Page</h2>
    <div style="float:left; margin-right:30px">
        <h3>--------------- Settings ---------------</h3><form>
            Faster Test<input type="range" id="sustainTime" min="1" max="8" value="4"> More Accurate Test<br /><br />
            <input type="checkbox" id="testServerEnabled" checked="checked">Find Test Server<br />
            <input type="checkbox" id="userInfoEnabled" checked="checked">Find User Info<br />
            <input type="checkbox" id="latencyTestEnabled" checked="checked">Do Latency Test<br />
            <input type="checkbox" id="uploadTestEnabled" checked="checked">Do Upload Test<br />
            <input type="checkbox" id="progress.enabled" checked="checked">Show Progress<br />
            <input type="checkbox" id="progress.verbose" checked="checked">Verbose Progress<br />
        </form>
    </div>
    <div id="prgs" style="float:left; margin-right:30px"></div>
    <div id="msg" style="float:left;"></div>
    <div style="clear:both;"><br /><button style="width:150px" id="btnStart" type="button" onclick="btnStartClick()">Start Test</button><br /></div>
    <div style="clear:both;"><br />For more information and getting an API key please visit <a href="//speedof.me/api" target="_blank">speedof.me/api</a></div>
    
    <script type="text/javascript">
        SomApi.account = "SOM5db5b10a9b2a5";  //your API Key here
        SomApi.domainName = "felipillos-bienesraices.netlify.com";     //your domain or sub-domain here
        SomApi.onTestCompleted = onTestCompleted;
        SomApi.onError = onError;
        SomApi.onProgress = onProgress;

        var msgDiv = document.getElementById("msg");
        var prgsDiv = document.getElementById("prgs");

        function btnStartClick() {
            //set config values
			SomApi.config.sustainTime = document.getElementById("sustainTime").value;
            SomApi.config.testServerEnabled = document.getElementById("testServerEnabled").checked;
            SomApi.config.userInfoEnabled = document.getElementById("userInfoEnabled").checked;
            SomApi.config.latencyTestEnabled = document.getElementById("latencyTestEnabled").checked;
            SomApi.config.uploadTestEnabled = document.getElementById("uploadTestEnabled").checked;
            SomApi.config.progress.enabled = document.getElementById("progress.enabled").checked;
            SomApi.config.progress.verbose = document.getElementById("progress.verbose").checked;

            msgDiv.innerHTML = "<h3>--------------- Test Result ---------------</h3><h4>" +
                "Speed test in progress. Please wait...</h4>";
            SomApi.startTest();
        }

        function onTestCompleted(testResult) {
            msgDiv.innerHTML = "<h3>--------------- Test Result ---------------</h3><h4>" +
                "Download: " + testResult.download + " Mbps <br/>" +
                "Upload: " + testResult.upload + " Mbps <br/>" +
                "Latency: " + testResult.latency + " ms <br/>" +
                "Jitter: " + testResult.jitter + " ms <br/>" +
                "Test Server: " + testResult.testServer + "<br/>" +
                "IP: " + testResult.ip_address + "<br/>" +
                "Hostname: " + testResult.hostname + "<br/>" +
            "</h4>";
        }

        function onError(error) {
            msgDiv.innerHTML = "Error " + error.code + ": " + error.message;
        }

        function onProgress(progress) {
            prgsDiv.innerHTML =
            "<h3>--------------- Progress ---------------</h3><h4>" +
                "Progress Type: " + progress.type + "<br/>" +
                "Pass: " + progress.pass + "<br/>" +
                "Percent Done: " + progress.percentDone + "% <br/>" +
                "Current Speed: " + progress.currentSpeed + " Mbps <br/>" +
            "</h4>";
        }
    </script>
</body>
</html>


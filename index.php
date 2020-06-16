<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>GeoAR.js demo</title>
    <script src='https://aframe.io/releases/0.9.2/aframe.min.js'></script>
    <script src="https://raw.githack.com/jeromeetienne/AR.js/master/aframe/build/aframe-ar.min.js"></script>
    <script src="https://raw.githack.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    <!-- <script>
        THREEx.ArToolkitContext.baseURL = 'https://raw.githack.com/jeromeetienne/ar.js/master/three.js/'
    </script> -->
    <script src="./script.js"></script>
    <link rel="stylesheet" type="text/css" href="./style.css"/>
</head>

<body style='margin: 0; overflow: hidden;'>
    <div class="centered instructions"></div>
    <a-scene 
        vr-mode-ui='enabled: false' 
        embedded
        arjs='sourceType: webcam; sourceWidth:1280; sourceHeight:960; displayWidth: 1280; displayHeight: 960; debugUIEnabled: false;'>
        <a-assets>
            <a-asset-item id="magnemite" src="./assets/magnemite/scene.gltf" response-type="arraybuffer"></a-asset-item>
            <a-asset-item id="articuno" src="./assets/articuno/scene.gltf" response-type="arraybuffer"></a-asset-item>
            <a-asset-item id="dragonite" src="./assets/dragonite/scene.gltf" response-type="arraybuffer"></a-asset-item>
        </a-assets>
        <!-- <a-entity  position="0.15 -0.5 3" rotation="0 180 0"  gltf-model="./assets/charmander/model.gltf" scale="2 2 2" animation-mixer crossOrigin="anonymous">
        </a-entity> -->
    <a-camera  position="0 1.2 0"></a-camera>
</a-scene>
<div class="centered">
    <button data-action="change"></button>
</div>
 <!-- include the Glitch button to show what the webpage is about and
          to make it easier for folks to view source and remix -->
          <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div>
    <script src="https://button.glitch.me/button.js"></script>
</body>
<?php

//json_encode($returnObj);
$str = '
{
    "contents": [
        {
            "information": {
                "name": "Big Buck Bunny - aac stereo, aac 5.1",
                "stream": "dash_ondemand",
                "uri": "http://ext.inisoft.co.kr/demo/BBB_clear/dash_ondemand/demo.mpd",
                "image": "http://ext.inisoft.co.kr/demo/BBB/img/BBB_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/BBB/img/thumbnails.xml",
                "description": null,
                "contentID": "590",
                "duration": 596,
                "video-resolutions": [
                    "640x360",
                    "480x270",
                    "960x540",
                    "1920x1080",
                    "1280x720"
                ],
                "audio-tracks": [{
                        "name": "2",
                        "description": "English Stereo",
                        "code": "eng"
                        }, {
                        "name": "3",
                        "description": "Endlish 5.1 Channel",
                        "code": "eng"
                }]
            }
        },
    ]
}
';

//print($str);
$obj = array(
    "contents" => array(
        array(
            "information" => array(
                "name" => "Big Buck Bunny - aac stereo, aac 5.1",
                "stream" => "dash_ondemand",
                "uri" => "http://ext.inisoft.co.kr/demo/BBB_clear/dash_ondemand/demo.mpd",
                "image" => "http://ext.inisoft.co.kr/demo/BBB/img/BBB_cover.jpg",
                "thumbnails" => "http://ext.inisoft.co.kr/demo/BBB/img/thumbnails.xml",
                "description" => null,
                "contentID" => "590",
                "duration" => 596,
                "video-resolutions" => array(
                    "640x360",
                    "480x270",
                    "960x540",
                    "1920x1080",
                    "1280x720"
                ),
                "audio-tracks" => array(
                    array(
                        "name" => "2",
                        "description" => "English Stereo",
                        "code" => "eng"
                    ),
                    array(
                        "name" => "3",
                        "description" => "Endlish 5.1 Channel",
                        "code" => "eng"
                    ),
                ),
            ),
        ),
    ),
);
echo(json_encode($obj));
//print_r($obj);
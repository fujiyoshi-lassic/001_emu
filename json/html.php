<?php

header("Content-Type: application/json; charset=utf-8");
header('Access-Control-Allow-Origin:*');
?>
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

        {
            "information": {
                "name": "Big Buck Bunny - multi key encryption (HD/SD/Audio)",
                "stream": "dash_ondemand",
                "uri": "http://ext.inisoft.co.kr/demo/BBB_mk/dash_ondemand/demo.mpd",
                "image": "http://ext.inisoft.co.kr/demo/BBB/img/BBB_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/BBB/img/thumbnails.xml",
                "description": null,
                "contentID": "596",
                "duration": 596,
                "video-resolutions": [
                    "640x360",
                    "480x270",
                    "1920x1080"
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
            },
            "drm": [
		{
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYfM7WM3QZNQ1Nrd8YzLVcdVgzWHei3AVDZCMdOZV5ZjQ7qIzrOXD5odjIkTUpD3FP5kC6QnlRTrpMF5dTPa9jdvP0hv9QEstgOmayoQQhMqbLdaEudwpbY30Ou3kUJ6LRrtMUi8TcrNq5tlrnwm5ap9jYBxAuhMAzcSy1BwgHkWK6dq8ARYTJN2NXZ80ly26HrnFhaqMSqaixssha/DCPfNMilmE629hISImqdjOmSMWdmRBMIfJFNV5JZ8vCatjoO9br+D5zr6Q9xETSjIk1Joah6GGtHPjoU+Qru95pY3OcvGp0HIyRWmmo99uRwUv24+TEwrQytevFvIROOSGo8MzAFWLQNxu+cQrvYVt4Rq6ZshRiaQ654C/aK4oJXn2IrG06pFXJyFpFuYgvs+/+0NBGyKVCYDNOHdKLYLQcvJfpNdiHfmEaFjRACjiFvT4FWxiDGt/M4cIWZfpcIEMbmvZBjT6FsQmsM3WVh6x1hiBbqyugZSCMvyxCtoO5+cJTssrTmXplHtbwFXr6StpjV9Ty2EMeJMzVMVlI6nH1FpjN/klGEf81HMRhMd8SJAR9miJfRsQ4HK9yfbXt3/mwAxel67ZslbH45S4LCq4u/vG301ksrfCIcZrwA3/x1pP4X0G0UUpwtCPrZWxl7mB8XXYzORqNDg2fHmBT3XfxPgPkcur/VOonywN2PC1w0h3KqBNHod9cXFnar+xV8yT6LnjNVhuqjxlsvjSY8IFNEZq8ZTfdOci+QMgi2ukQUW4ul7cnmJIQjJvKuJC58rtf3Lvnzw0H3cCVPC4czR5rTiYylRBhwexsWmnfboPnSFSwEaMFjFxy6rSIscxR4IM5iA7lx0Dv+R6EW/MhjO16I7y8eK2v7RGCOMup/3YadkUQCSr8bVRBtMlgvOCS1nZ/JRo3O/mjAELyFPZZBYeqEo+GzpgLNRuf8piWxCCZkGpQCNCdskvarLvvujk9Aabo2zk/j+bsx9RMeA20Z61SQtsppM1bur4L2Niw41Sx++0mV32gBRtpEh9kGyT5UPh+virMd25MZj4jOjA44+o1Xk7fKdIDHGC65HMiZSM8oSBiTAmzT+8KE0u/GHPKVsbt4GI7gaTwzqT2dtqHwLwY+ePbY60cJBFnVt9xIyF29V9FsDxCYyq2teYMP6UvJOLw0OGADh7sn80Gcx7qQ0dPEl0TOQmqC4JDCqZtrkuXMsVeqY+uHAw++4LWrMYtSZxuf0wKmbd53bxoFO7NdwEe68qTfbn3N2PEv2tissfwzFNGoFfQwfFO/FVzmCV0wW3icZ69jlmMz5eKeOudnfr3QSuhSYU8tNefdaQq4S8NAE/qRVh72Xd47QIPdtsNMX3mXvns9iUhXrgBcSCd1MA9g8eafzBxyZJ0csvgUR8i1Eep/vCAr7NoXmg6Z8fKtGTgi38byD5UxIaDSqx/BTIpDjTUKGkyEAXs7VfWDRT1pA8mn7IAGoYJp67X5VPesZYvbNxdtFFZVzhl0DMNG69Jnh+cr5tHs7M7idvXlv9uDp5jqm3PfbLue8XyfL4iYNOeFIin3LZIIuP1q00IzMO81rqG44ww2vrT32PnD7ruYuap1BCw04vNEyLkMXcu37mYtrTvD9TJcfUMourOB14TyNBECQ9nKlcSy/mr3si61pmMD199ixuHZ4gfEn6l/9yI87AK1C7+1Onunr4Rxa92HZCyJkfk+rE14XN4/5VDLkmiGNIMeJBHsr9bUQZwpcESgLKllWeULktkLwP8TZbPW01XvO6zbc1Zt6vF9Z3zLpgdPqYIeqoGnm2EzMLbLHOflSB0gOKLW6+UIuvnmEU8mGa53OyUcEEREm2ul5mwRsBaC2xMaRwzeeX32kCx06ftgmxxwKDkcbkxmhBWomIgqIHxe7cDjK7VRjqKJXdQmCHgQ=="
            	},
                {
                "type": "widevine",
                "lic-acq-url": "http://ec2-54-64-238-113.ap-northeast-1.compute.amazonaws.com/widevine-dbg",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYemD4buVrz0S9bcQIVQSa5yQR52O1h7+qNDnEgyciQFLXPFk4TwsW+DeyPwxO1tJPRVsI4VJ+V+FXPP4ja4FH6S3MHbweParIBinA/UkEfmtMhs5ao4BmcJofRssbA8PzvupyCc3zETG0GiLeuyyPUVKB3wKmspSCIE+S3zyqK2t/E5ZA9xAQ1FRoqmwcn1+Vqfoga5ho3wDWE0+eYF724MLGtDVEctlqaX0+5iyl9KGk/IAW79bxFLqk631YMbbWS6+MjkoRS4z/M/fLs1vkR7t3rn2Xej1weeF+JkDGk/90qZs6z27HW0JE3GH2DY59XG8X7WgVJA7Z6/X2CQ0oX18bQtQW6OpGqxNdUbyy+u16rvDWNTg/NOoK1MX2oK9oOf/63k2OgrCcxYu4w6jUg5Vgi4I7pqjNuksy6jigSWQS3psxt3eud0U4FszIEI9JhgCPeaFNKtVtckIky12SHDFSJO+OkE86+dmdRlcre9i6n88oMit7dfwlNAHkl2o8Q5C596x5r7QcInwkZ+/5HEAMAPgzt4XUuKnbX/xvmpQ/IO3PLS7hBrztzivv1Wylv8Q/FaXDY7ke4uaqsPLfavrKGI9f96YwNrVWgT+SeICgpUAVR/NfgcjIhsUlpf53PXeXBYWZRLNfJkvuMecLMyR9u3ENNWrwG8wh1YhWjCPiJrb/ByEa0dIQWzXe7fyaIxT5eqSE6iBN5fVRBdFG0fI/iuY75xkJROceKEyPKJS7DHrTzotTO4d1h8z6tj2XvquA3zOQDQeWkDAZ6/DX9DwPfYRZX+/iQK1a1EU7hQ+KYmSPE96I7mjq6KJ5xo9NzQCkAdM1vrbkPVze6u5RIHtxfPjU2XMpDD6EAI/pkPJW+r8OmI/MwfXrZ4PA//PHxkJBBFwUiJJCaYdVsbvT9vGxGui1cl1O/px5Nyuo2X+7G7Jn2HlU3IvdyiJhLqJ5/7XodU1zGN5KP2eZCqvAlRYJ/I3ruKRQOpqJs8gcQF2fceeQsueBxddFyVYl3iUBSwvyc7Jd9T27U8PpsFTd0nbBMBSztS7fkhRfx0tmsVg6aFfu/SXUfGomAIdpjMxvKB7tuSBWg3GHY8Ypw5AjtN1n3ZkBQfUwEGHwUWFoGZmc6onU9qWPngBTMrtS9gbqyZTY8n5N9b9eswvsRQk8DdhIHcVkPNd5QKEmCDofRxTJcRQ4qElAW7H4zcqxi6OtEddb5VwzAzKhjkBsc0HCRKpEzxuwriY/LZgIbBLVWjKUwSmuDHey9Ur5BZPDiQwDwKgU5hjk0Fq1Qw8GOP+GwXPLwTBjMwxoH1oiWK2pCZ7f5ns4ocI12nARgW4oXnBwuFkw0uaAoBpAK592UV7Z3nvHSzlXxiUEXOsuJBhrwn6xqh7xbmWwSrrKlUemZq4IjtUw1TK6j7EnrJDkIud4wLhBJGOrp1Yu7Eo+me551KBvKYIspN+bnCUP+GqAr1XVAjHqd28Jr3mmHiQ8Ohpag9ob65lVfWrx1SCbpX/ms2J21bdqxrqERf3Z215gBUEj4pJ5o20p/m+finb0jP7MwlkJ5VA3NFv2NA4/Xscew8yB4tNozezCQBDb1DR5auZ84C2g3SNX7Ct4T8Fl/5F9pOgR/VhkrRMOzoH9oYnzL9pKvo6Cm1dTMczTIzUvp7H/KuPvjjhL5wzUL6tRKSxKANGX9OPKIEBFEs7xul9ntYRZrQj7DBUmoSN2ziGI/b3oA=="
		}
           ]

        },


        {
            "information": {
                "name": "Big Buck Bunny - aac stereo, aac 5.1",
                "stream": "ssff",
                "uri": "http://ext.inisoft.co.kr/demo/BBB/ssff.ism/manifest",
                "image": "http://ext.inisoft.co.kr/demo/BBB/img/BBB_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/BBB/img/thumbnails.xml",
                "description": null,
                "contentID": "597",
                "duration": 596,
                "video-resolutions": [
                    "640x360",
                    "480x270",
                    "960x540",
                    "1920x1080",
                    "1280x720"
                ],
                "audio-tracks": [{
                        "name": "audio_eng",
                        "description": "English Stereo",
                        "code": "eng"
                        }, {
                        "name": "audio_eng_5.1",
                        "description": "English 5.1 Channel",
                        "code": "eng"
                }]

            },
            "drm": {
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYTykzFBIQ/XuNBXGNgwSksFGg+vG38iwP/Zh0AhmlN+xEBbiRHKZRAKF8zwsnC+SuHqnOa/5mBMF8HC8cbg2mDcrdLYzY0kgLSYXHj2EIYNONRYYpvuUzCaWiBnoSxhUD4HYNTzRyUUR378RSQxlN67ri2Mw+8uEgKvnuuo8NzI+gkRq2OFMf4eHG0TV3gQrzQtGvSl/WkWiHt6CEdEYC3coz1TqcjoCc8+CLYmEZENMVJ61rBSn5GG4lwVVQ9/oGhhJvXZ0Xw94DMSMSHcGNyiEVZsgAWsjXSZuAxpp/w/C1Y7n9WqBtZ/1K/j3W9yg/iIIT527DzOWOP7MmE/mpDEONCD3d9SKDY1cYKTr5IzCb0dUkQgKAcBI1iHX8jEWf34wmlezd/PZrXuezjVSbi79FHIfnpZljhMQ+++4hlNmeZzO7JX4vgmCap4b03jBTCrgNvontA4t5txErQPQRQ4FSUK3pQgvoab/YaS76nZ7Q6Y5q128WD04O2xAZ7Dmp6dptuVBVMF1tos9CloX3jobM5bINCNqoyteJ86DK4WACNIMLPtxxeCC1TB0sLf6/3tQ2hAvgFFYkUPQCgbMOZA6Fd5jeo6Y/IEarRMySeWvWn4WIxu/aVWgWHo4pgSiPQzE9NrERDK8nZ9qtNglUARCGWsx32+t+WG76SuwQ+Q7aaeef9ZuLk0sT+vWn6B9abtm8noGJDfXSP7rJPWeRZiRFcQzbQBIxGJNV+72Wa7R8WawU5Mt0rCIvGjBxsl1qyj5D2ttHHI3hU52APmfca4TrjnDwV1Pqml3IKGogbBDHTD0Jt01OgUQFwoZ3V1+OzD2SBa2dQLpwk7JIwfMM5MJCDgYOOzWmyKitnqdBOPY7luzNTRDfjeIKCZkQ5g68v8XY+DhxvO+DmZ8hlGBBgSIIWoWPmbpfUDq6MRbgdy/bm2c0Zn1AHNuZBM+0zcjTX3U+7vBZw4g/mUmr6sovPbwSFRfYVKZJ4JyEAmmB7W8Wn3BsyvDGq0t+QePY43kkcKpQDurvn7hnA8rIMpXoXV2rpafh4x2XnZ0ZhVEyOesEYc2lKCcsaG7XUqf/h55LVT8UI4Tgvftzm2PrKRK8UA8d2ira76NVX/ETVww0o+1+GSZUGdxJgr6o2cQPo8ngSJpRuyhPb4QV6/HBO+B4J1GspoY3TT1MWlVVZwvAwDK"
            }
        },

        {
            "information": {
                "name": "Sintel - widevine encrypted ism -> dash live",
                "stream": "dash_live",
                "uri": "http://ext.inisoft.co.kr/www/output/widevine/SINTEL/ism/demo.ism.ctx/dash/playlist.mpd",
                "image": "http://ext.inisoft.co.kr/demo/SINTEL/img/SINTEL_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/SINTEL/img/thumbnails.xml",
                "description": null,
                "contentID": "88601",
                "duration": 888,
                "subtitle-tracks": [{
                        "name": "text_stream_eng",
                        "description": "English",
                        "code": "eng",
                        "embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/english.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/english.ttml"
                        }, {
                        "name": "text_stream_ger",
                        "description": "German",
                        "code": "ger",
                        "embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/german.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/german.ttml"
                }]

            },
            "drm": [
                {
                "type": "widevine",
                "lic-acq-url": "http://ec2-54-64-238-113.ap-northeast-1.compute.amazonaws.com/widevine-dbg",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYZnwYiF5IK28R0w9yPr2v7TKxw7I45X40CweTBa75LXaiA+eFaI2YakVP8CmM5SB2GeQzNy7xylH1CP4o3Do5TJhMuAoM+12pGSCNw/PwmTIMi+5RkyqLhK7wKQ+aFO20008lX6Iqf2z4383FI/PIWimBEzOC8mUDvhxVyjaFvz9mM0/sY19hMzLklk291UAA/wg8ZLSieCeUxgcJrYtGQd8SKg3h+t1zNvH0o8VZX9Zq13MRRMlMJ++eKH3qFuxVzgnxfz4F6NxphD6CRUSGRr5uOPygqYorJNBJZEb7SJ2ecBtEY2RuyFzcq5AkCI8uLLJIm+VWYcqx3MiG6jMfUjApbxQ6B/oevDPYgN5crceXXKwn5GD5uEULdPsyGKUP4okIBTBGO5CC0mHPOPqdXUERHJosHpSTIvTdA+t4TUybCZxVPcxMVzizUlObaGL+X7fvHvsx3BMhoPPUU48UNrNquKtpBngSycq4VnAltJ+4fTlkszHLnrDlxHLIZsqq+cV4CRk8P1Tj2n7W/yh+mtyZb4AwsanFIHJ+YyF4UOvpiHdVEvZYCiQdcCxSrHIuBqxwSvV3Pc+gP42ZMRbMO5iIYAV7KPt9LaDbiquy6LIPDogyrhzpL/XjGNZ5+gwBuCVcl0MpnjGj9Dh5f/gIyhPjfaRFid8UZDL7mjjvJ40HaTVUZ/PDZxOgH/F6osu64cuDDhsBj4Cd9wofQRWFxGlBNBc58qvf3isHdMsMgmvhXFI9eQg4+gTYoB69/oGUVL1GjNydg/cgPQvAPIZhg7u1tuKqySP6uLhbtqQv4GjG4Hd4MO/tJbT/u8ND5wJMSQJMc0CQxgD7SNlXtvL3hoo+nCIdFYjGLnrja1DWbltGivwU8A7SJBvMeInMiXqNeDH8PngM/Dbf84fKnkoL6FEMuzt9JbcB9Q//huPKny0Xp2KwhfqMqTKgRyPEUcYktX856N/vzfqxlg64ByhmNcOsYwZSfW9Ul78VKJX3unmupIxwikMMzgEJ8r0zYlKp7W04EdhofvVyvv2aBWlMJvyP4BhbwoyIuTRStm/b10HTHxjJAW0wNiUV0QxP6JsCq/6K968sPWu4qdoJfwd4v5Uxd5eb4/yWlilSHjYN5LmJFmr25K6hn3Vradm8eT4UNF4pzy4UgXLPKhGn1jVk/JmqIJHB9Tfxm0a28hKthaMVfVlnm6peI9InwpLv0NuILoTiQ3PY52UuAD7a5uBtzUNC1kiQuuK2TUHGFYDJWOCfqoL57WzxKTwV198PqxhnLu0FiUGa4gBZAhz08T7CA4=" 
                }
           ]

        },
        {
            "information": {
                "name": "Sintel - playready encrypted ism -> dash live (add widevine on-the-fly)",
                "stream": "dash_live",
                "uri": "http://ext.inisoft.co.kr/www/output/playready/SINTEL/ism/demo.ism.ctx/dash/playlist.mpd",
                "image": "http://ext.inisoft.co.kr/demo/SINTEL/img/SINTEL_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/SINTEL/img/thumbnails.xml",
                "description": null,
                "contentID": "88602",
                "duration": 888,
                "subtitle-tracks": [{
                        "name": "text_stream_eng",
                        "description": "English",
                        "code": "eng",
                        "embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/english.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/english.ttml"
                        }, {
                        "name": "text_stream_ger",
                        "description": "German",
                        "code": "ger",
                        "embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/german.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/german.ttml"
                }]

            },
            "drm": [
                {
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYe2k9BXv8W7nGI16739ckIYkZeEDs4C3FtU6iiBQqhwaTg+JehEGadZtXLitgk0+IAulEgqGGKYEZ1uh73j4KYdVA0kyVV0A1wtrwTSF59LjuVgl0BLNzydC1wW3eqDegYtw61WaadFHGK1XZF3zVrQso3ii+W7EA+L8RsR8Sj0peNAK8mH/DLBKQ7rzGBlMM3RObwIKCu0QSUDIkxvRMRXHjznlYwFa/dugjKDO/5psKwtU4O+0Ll3SvfTjcIkAJpmpr70U+2CQ51S34Le6PnYGLDETYpmf6ulSZ7pFgBMPrBvUiUHo8C2ZoJ1OMkeN78BSetlf52bUaG9gXBOvyk01seM+fiBqVlo1TqmoL5gOiq6KaWIGNuB1IpRo8GKmnWaOZS/nbk+NG0/sLDHmqzj6GASZoK2pqJo6/BWkE3ra3msK3ZiTs8pt/rR1iqYy97Goysj0OrHW0jXlWQE0jsIWjbqSrP0JnpDPagRM4qo/lNl0z1i28Gq4MRlrCq2F0KKUvKScKML+2mOyGA+iwYv4YRUtqvX4990R1DwwwGTfNayFASEQrRmv48L8q9M3UpoKIs7XbCt795pL9XAEqcpMsj1JZRUZhzH3DpHZ45QuhF9tUbtnoYIWUJG9RJ9ISpB3QCrZisrWgVO6y4+IzVByGHzTDjN8lnM33JWj0PVy3zVBXGNMuyJ/FNEPXQ0oLbxqWOqX0mn59BBVXw2DoYthxwK0xuC8GGzEfzXngqjtP99vA+PJ07cxi4UnNlVwznRqZFuv8hzrRWdvYb1Y/0aRBF5YrQu2wQeHCC2h6JIL3uGLQcJlahoZsPrHd0TLfFdX2JbaCCA6suNOlIcWPOAsnriVBk8SI8nlNgaAAJ9YTXCphIlPosBuC5u5Q8pekI6Qx6/MGz1GANNgafWfeQ7UpqX3CIaSioz4f2KoGqS7kfY9Vb/wNe0oslSS4Ra7BItDMBcWL8CECGz1MDYd+ZBUdBrGvtIHYBvla/yPaCax5DNJfXIgu790igA/d8YCtUElN6CcoYcZRcP/cXW10TBKFqXeXrSMS6NZ+hMk4VLvFA+Zzi21OxlNRPZodCYSTfOVlqOFIjuAotjB6Dyit+zkQILlnAicDerbwR4fZq4I+LN5AvMKz/c8OES4HCmtCex2BP+1kTdxHbW0/EZDhtE5fZNqM5cYDsV82aVtjTGH"
                },
                {
                "type": "widevine",
                "lic-acq-url": "http://ec2-54-64-238-113.ap-northeast-1.compute.amazonaws.com/widevine-dbg",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYZnwYiF5IK28R0w9yPr2v7TKxw7I45X40CweTBa75LXaiA+eFaI2YakVP8CmM5SB2GeQzNy7xylH1CP4o3Do5TJhMuAoM+12pGSCNw/PwmTIMi+5RkyqLhK7wKQ+aFO20008lX6Iqf2z4383FI/PIWimBEzOC8mUDvhxVyjaFvz9mM0/sY19hMzLklk291UAA/wg8ZLSieCeUxgcJrYtGQd8SKg3h+t1zNvH0o8VZX9Zq13MRRMlMJ++eKH3qFuxVzgnxfz4F6NxphD6CRUSGRr5uOPygqYorJNBJZEb7SJ2ecBtEY2RuyFzcq5AkCI8uLLJIm+VWYcqx3MiG6jMfUjApbxQ6B/oevDPYgN5crceXXKwn5GD5uEULdPsyGKUP4okIBTBGO5CC0mHPOPqdXUERHJosHpSTIvTdA+t4TUybCZxVPcxMVzizUlObaGL+X7fvHvsx3BMhoPPUU48UNrNquKtpBngSycq4VnAltJ+4fTlkszHLnrDlxHLIZsqq+cV4CRk8P1Tj2n7W/yh+mtyZb4AwsanFIHJ+YyF4UOvpiHdVEvZYCiQdcCxSrHIuBqxwSvV3Pc+gP42ZMRbMO5iIYAV7KPt9LaDbiquy6LIPDogyrhzpL/XjGNZ5+gwBuCVcl0MpnjGj9Dh5f/gIyhPjfaRFid8UZDL7mjjvJ40HaTVUZ/PDZxOgH/F6osu64cuDDhsBj4Cd9wofQRWFxGlBNBc58qvf3isHdMsMgmvhXFI9eQg4+gTYoB69/oGUVL1GjNydg/cgPQvAPIZhg7u1tuKqySP6uLhbtqQv4GjG4Hd4MO/tJbT/u8ND5wJMSQJMc0CQxgD7SNlXtvL3hoo+nCIdFYjGLnrja1DWbltGivwU8A7SJBvMeInMiXqNeDH8PngM/Dbf84fKnkoL6FEMuzt9JbcB9Q//huPKny0Xp2KwhfqMqTKgRyPEUcYktX856N/vzfqxlg64ByhmNcOsYwZSfW9Ul78VKJX3unmupIxwikMMzgEJ8r0zYlKp7W04EdhofvVyvv2aBWlMJvyP4BhbwoyIuTRStm/b10HTHxjJAW0wNiUV0QxP6JsCq/6K968sPWu4qdoJfwd4v5Uxd5eb4/yWlilSHjYN5LmJFmr25K6hn3Vradm8eT4UNF4pzy4UgXLPKhGn1jVk/JmqIJHB9Tfxm0a28hKthaMVfVlnm6peI9InwpLv0NuILoTiQ3PY52UuAD7a5uBtzUNC1kiQuuK2TUHGFYDJWOCfqoL57WzxKTwV198PqxhnLu0FiUGa4gBZAhz08T7CA4=" 
                }

           ]

        },
        {
            "information": {
                "name": "Sintel - pr/wv encrypted ism -> dash live",
                "stream": "dash_live",
                "uri": "http://ext.inisoft.co.kr/www/output/multi/SINTEL/ism/demo.ism.ctx/dash/playlist.mpd",
                "image": "http://ext.inisoft.co.kr/demo/SINTEL/img/SINTEL_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/SINTEL/img/thumbnails.xml",
                "description": null,
                "contentID": "88603",
                "duration": 888,
                "subtitle-tracks": [{
                        "name": "text_stream_eng",
                        "description": "English",
                        "code": "eng",
                        "embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/english.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/english.ttml"
                        }, {
                        "name": "text_stream_ger",
                        "description": "German",
                        "code": "ger",
                        "embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/german.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/german.ttml"
                }]

            },
            "drm": [
                {
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYe2k9BXv8W7nGI16739ckIYkZeEDs4C3FtU6iiBQqhwaTg+JehEGadZtXLitgk0+IAulEgqGGKYEZ1uh73j4KYdVA0kyVV0A1wtrwTSF59LjuVgl0BLNzydC1wW3eqDegYtw61WaadFHGK1XZF3zVrQso3ii+W7EA+L8RsR8Sj0peNAK8mH/DLBKQ7rzGBlMM3RObwIKCu0QSUDIkxvRMRXHjznlYwFa/dugjKDO/5psKwtU4O+0Ll3SvfTjcIkAJpmpr70U+2CQ51S34Le6PnYGLDETYpmf6ulSZ7pFgBMPrBvUiUHo8C2ZoJ1OMkeN78BSetlf52bUaG9gXBOvyk01seM+fiBqVlo1TqmoL5gOiq6KaWIGNuB1IpRo8GKmnWaOZS/nbk+NG0/sLDHmqzj6GASZoK2pqJo6/BWkE3ra3msK3ZiTs8pt/rR1iqYy97Goysj0OrHW0jXlWQE0jsIWjbqSrP0JnpDPagRM4qo/lNl0z1i28Gq4MRlrCq2F0KKUvKScKML+2mOyGA+iwYv4YRUtqvX4990R1DwwwGTfNayFASEQrRmv48L8q9M3UpoKIs7XbCt795pL9XAEqcpMsj1JZRUZhzH3DpHZ45QuhF9tUbtnoYIWUJG9RJ9ISpB3QCrZisrWgVO6y4+IzVByGHzTDjN8lnM33JWj0PVy3zVBXGNMuyJ/FNEPXQ0oLbxqWOqX0mn59BBVXw2DoYthxwK0xuC8GGzEfzXngqjtP99vA+PJ07cxi4UnNlVwznRqZFuv8hzrRWdvYb1Y/0aRBF5YrQu2wQeHCC2h6JIL3uGLQcJlahoZsPrHd0TLfFdX2JbaCCA6suNOlIcWPOAsnriVBk8SI8nlNgaAAJ9YTXCphIlPosBuC5u5Q8pekI6Qx6/MGz1GANNgafWfeQ7UpqX3CIaSioz4f2KoGqS7kfY9Vb/wNe0oslSS4Ra7BItDMBcWL8CECGz1MDYd+ZBUdBrGvtIHYBvla/yPaCax5DNJfXIgu790igA/d8YCtUElN6CcoYcZRcP/cXW10TBKFqXeXrSMS6NZ+hMk4VLvFA+Zzi21OxlNRPZodCYSTfOVlqOFIjuAotjB6Dyit+zkQILlnAicDerbwR4fZq4I+LN5AvMKz/c8OES4HCmtCex2BP+1kTdxHbW0/EZDhtE5fZNqM5cYDsV82aVtjTGH"
                },
                {
                "type": "widevine",
                "lic-acq-url": "http://ec2-54-64-238-113.ap-northeast-1.compute.amazonaws.com/widevine-dbg",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYZnwYiF5IK28R0w9yPr2v7TKxw7I45X40CweTBa75LXaiA+eFaI2YakVP8CmM5SB2GeQzNy7xylH1CP4o3Do5TJhMuAoM+12pGSCNw/PwmTIMi+5RkyqLhK7wKQ+aFO20008lX6Iqf2z4383FI/PIWimBEzOC8mUDvhxVyjaFvz9mM0/sY19hMzLklk291UAA/wg8ZLSieCeUxgcJrYtGQd8SKg3h+t1zNvH0o8VZX9Zq13MRRMlMJ++eKH3qFuxVzgnxfz4F6NxphD6CRUSGRr5uOPygqYorJNBJZEb7SJ2ecBtEY2RuyFzcq5AkCI8uLLJIm+VWYcqx3MiG6jMfUjApbxQ6B/oevDPYgN5crceXXKwn5GD5uEULdPsyGKUP4okIBTBGO5CC0mHPOPqdXUERHJosHpSTIvTdA+t4TUybCZxVPcxMVzizUlObaGL+X7fvHvsx3BMhoPPUU48UNrNquKtpBngSycq4VnAltJ+4fTlkszHLnrDlxHLIZsqq+cV4CRk8P1Tj2n7W/yh+mtyZb4AwsanFIHJ+YyF4UOvpiHdVEvZYCiQdcCxSrHIuBqxwSvV3Pc+gP42ZMRbMO5iIYAV7KPt9LaDbiquy6LIPDogyrhzpL/XjGNZ5+gwBuCVcl0MpnjGj9Dh5f/gIyhPjfaRFid8UZDL7mjjvJ40HaTVUZ/PDZxOgH/F6osu64cuDDhsBj4Cd9wofQRWFxGlBNBc58qvf3isHdMsMgmvhXFI9eQg4+gTYoB69/oGUVL1GjNydg/cgPQvAPIZhg7u1tuKqySP6uLhbtqQv4GjG4Hd4MO/tJbT/u8ND5wJMSQJMc0CQxgD7SNlXtvL3hoo+nCIdFYjGLnrja1DWbltGivwU8A7SJBvMeInMiXqNeDH8PngM/Dbf84fKnkoL6FEMuzt9JbcB9Q//huPKny0Xp2KwhfqMqTKgRyPEUcYktX856N/vzfqxlg64ByhmNcOsYwZSfW9Ul78VKJX3unmupIxwikMMzgEJ8r0zYlKp7W04EdhofvVyvv2aBWlMJvyP4BhbwoyIuTRStm/b10HTHxjJAW0wNiUV0QxP6JsCq/6K968sPWu4qdoJfwd4v5Uxd5eb4/yWlilSHjYN5LmJFmr25K6hn3Vradm8eT4UNF4pzy4UgXLPKhGn1jVk/JmqIJHB9Tfxm0a28hKthaMVfVlnm6peI9InwpLv0NuILoTiQ3PY52UuAD7a5uBtzUNC1kiQuuK2TUHGFYDJWOCfqoL57WzxKTwV198PqxhnLu0FiUGa4gBZAhz08T7CA4=" 
                }
           ]

        },


        {
            "information": {
                "name": "Sintel - aac stereo, 5.1, subtitles",
                "stream": "dash_ondemand",
                "uri": "http://ext.inisoft.co.kr/demo/SINTEL/dash_ondemand/demo.mpd",
                "image": "http://ext.inisoft.co.kr/demo/SINTEL/img/SINTEL_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/SINTEL/img/thumbnails.xml",
                "description": null,
                "contentID": "886",
                "duration": 888,
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
                        "description": "English 5.1 Channel",
                        "code": "eng"

                }],
                "subtitle-tracks": [{
                        "name": "text_stream_eng",
                        "description": "English",
                        "code": "eng",
			"embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/english.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/english.ttml"
                        }, {
                        "name": "text_stream_ger",
                        "description": "German",
                        "code": "ger",
			"embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/german.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/german.ttml"
                }]

            },
            "drm": [
		{
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYTWNpi/x26g540J9F6RjWSHxpvJQzo9LcJ3jGcgUH9fRRN3EmSOL+lYf7v5KWTh+vBUqKcN3A1nYtvOxriz7KAD5GB1keBsDhMcQVbSFneda4Em84UKfhDNFUe+bSp+pQOGI8n+WwNobfM4+y4JJGn7xRNxNizm0SVQ6sREu9FeixmsLIHM122mwfepSNEh/lbXgS6qr3YatJ9vunYIbqpEVMziQIxwRrRaboOv+XtLXW/yTlCPE36pffK/E4bAHV5Rm312MYvJz+bngHyHMt/cZ/o6jY7MLi73ncXOAQSJKzPZn/P+HGFmX+52iJ9nzVGTmKSgCUudbrrR2rbcmDsuWCVL6GQm/CDjHuWk3oXtctskbTZPIe/bRPOD8zIJ26khLcOurJI8Bik2Z+YaW7H+m+UHNzEH5VV9yp++vsG7sWrjrJlZU9gmatUjc4bQHjocKP7MO3SulVAXMwZd/zAgDWeHpUTBSKULyiZANHIuGnsU+2Ap1tx9EKDnjLsWGlgt8lkt971iIhyJq7rUtV3VeprXQBptjL+cPqu4ZdYIk8UhMsSS+pY8mQIzWtV7+39P1L95YnMuPIq6DmsQ8gzri7VwCKU2JTMaBWDEObm3ukHqNUSfHc3A2/QPFFzCBwvw7nBwHHzd+xOx11B5AXN7+CkA8vpFW3vvZpf69Ay06i3tBbOg1UU1wfBhciNtJBgTMRHe45BraCzhui/i4EZnHJHQdirKEB27hUBrJuFQFxFwyPJQyFqYF4uKCVCEC6mZgU9Hbb01yAfxoytrsuEratyunG+UaXoCJEbzmnP6imOqkWcz7Iy8ikFyJZcyaM3va+LbCxk/rYfK9ipHfLw7lUfIKivsWO3Do/G1N9pZWlr0GF3LD+0W/Qu+xuWWMc1fi5pW3I7Kn6AnNgXkEyls9/bjaQPbZhMKowZzkYINrM4IlNHBVipQtrKox+oDHoC1MkP5//K4EfNZWvHUJt2jcSX5FVwPZYRaWDieDmAgm3ahlcSet2Fqy5ZTZhQK8lKnpvLM7sysXvnuDwTAuf4yZYxNqhYdYXpkZlWu+P6UFW4LDNNnWueKtFA6ZDCxSCiaDkk983bXsAbZ44YKurPGW55LyC8hz3SGyFfQbLiKM6Y+YZrqUsb4U894pKYVy5sG49wBKm8Nm4nVxE58vYjwiuGX2zOQ0GYTvtqgU8zZk" 
            	},
                {
                "type": "widevine",
                "lic-acq-url": "http://ec2-54-64-238-113.ap-northeast-1.compute.amazonaws.com/widevine-dbg",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYZnwYiF5IK28R0w9yPr2v7TKxw7I45X40CweTBa75LXaiA+eFaI2YakVP8CmM5SB2GeQzNy7xylH1CP4o3Do5TJhMuAoM+12pGSCNw/PwmTIMi+5RkyqLhK7wKQ+aFO20008lX6Iqf2z4383FI/PIWimBEzOC8mUDvhxVyjaFvz9mM0/sY19hMzLklk291UAA/wg8ZLSieCeUxgcJrYtGQd8SKg3h+t1zNvH0o8VZX9Zq13MRRMlMJ++eKH3qFuxVzgnxfz4F6NxphD6CRUSGRr5uOPygqYorJNBJZEb7SJ2ecBtEY2RuyFzcq5AkCI8uLLJIm+VWYcqx3MiG6jMfUjApbxQ6B/oevDPYgN5crceXXKwn5GD5uEULdPsyGKUP4okIBTBGO5CC0mHPOPqdXUERHJosHpSTIvTdA+t4TUybCZxVPcxMVzizUlObaGL+X7fvHvsx3BMhoPPUU48UNrNquKtpBngSycq4VnAltJ+4fTlkszHLnrDlxHLIZsqq+cV4CRk8P1Tj2n7W/yh+mtyZb4AwsanFIHJ+YyF4UOvpiHdVEvZYCiQdcCxSrHIuBqxwSvV3Pc+gP42ZMRbMO5iIYAV7KPt9LaDbiquy6LIPDogyrhzpL/XjGNZ5+gwBuCVcl0MpnjGj9Dh5f/gIyhPjfaRFid8UZDL7mjjvJ40HaTVUZ/PDZxOgH/F6osu64cuDDhsBj4Cd9wofQRWFxGlBNBc58qvf3isHdMsMgmvhXFI9eQg4+gTYoB69/oGUVL1GjNydg/cgPQvAPIZhg7u1tuKqySP6uLhbtqQv4GjG4Hd4MO/tJbT/u8ND5wJMSQJMc0CQxgD7SNlXtvL3hoo+nCIdFYjGLnrja1DWbltGivwU8A7SJBvMeInMiXqNeDH8PngM/Dbf84fKnkoL6FEMuzt9JbcB9Q//huPKny0Xp2KwhfqMqTKgRyPEUcYktX856N/vzfqxlg64ByhmNcOsYwZSfW9Ul78VKJX3unmupIxwikMMzgEJ8r0zYlKp7W04EdhofvVyvv2aBWlMJvyP4BhbwoyIuTRStm/b10HTHxjJAW0wNiUV0QxP6JsCq/6K968sPWu4qdoJfwd4v5Uxd5eb4/yWlilSHjYN5LmJFmr25K6hn3Vradm8eT4UNF4pzy4UgXLPKhGn1jVk/JmqIJHB9Tfxm0a28hKthaMVfVlnm6peI9InwpLv0NuILoTiQ3PY52UuAD7a5uBtzUNC1kiQuuK2TUHGFYDJWOCfqoL57WzxKTwV198PqxhnLu0FiUGa4gBZAhz08T7CA4=" 
                }
           ]

        },
        {
            "information": {
                "name": "Sintel - aac stereo, 5.1, subtitles",
                "stream": "ssff",
                "uri": "http://ext.inisoft.co.kr/demo/SINTEL/ssff.ism/manifest",
                "image": "http://ext.inisoft.co.kr/demo/SINTEL/img/SINTEL_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/SINTEL/img/thumbnails.xml",
                "description": null,
                "contentID": "887",
                "duration": 888,
                "video-resolutions": [
                    "640x360",
                    "480x270",
                    "960x540",
                    "1920x1080",
                    "1280x720"
                ],
                "audio-tracks": [{
                        "name": "audio_eng",
                        "description": "English Stereo",
                        "code": "eng"
                        }, {
                        "name": "audio_eng_5.1",
                        "description": "English 5.1 Channel",
                        "code": "eng"

                }],
                "subtitle-tracks": [{
                        "name": "text_stream_eng",
                        "description": "English",
                        "code": "eng",
			"embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/english.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/english.ttml"
                        }, {
                        "name": "text_stream_ger",
                        "description": "German",
                        "code": "ger",
			"embeded" : false,
                        "ttml": "http://ext.inisoft.co.kr/demo/SINTEL/german.ttml",
                        "sami": "http://ext.inisoft.co.kr/demo/SINTEL/german.sami"
                }]

            },
            "drm": {
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYe2k9BXv8W7nGI16739ckIYkZeEDs4C3FtU6iiBQqhwaTg+JehEGadZtXLitgk0+IAulEgqGGKYEZ1uh73j4KYdVA0kyVV0A1wtrwTSF59LjuVgl0BLNzydC1wW3eqDegYtw61WaadFHGK1XZF3zVrQso3ii+W7EA+L8RsR8Sj0peNAK8mH/DLBKQ7rzGBlMM3RObwIKCu0QSUDIkxvRMRXHjznlYwFa/dugjKDO/5psKwtU4O+0Ll3SvfTjcIkAJpmpr70U+2CQ51S34Le6PnYGLDETYpmf6ulSZ7pFgBMPrBvUiUHo8C2ZoJ1OMkeN78BSetlf52bUaG9gXBOvyk01seM+fiBqVlo1TqmoL5gOiq6KaWIGNuB1IpRo8GKmnWaOZS/nbk+NG0/sLDHmqzj6GASZoK2pqJo6/BWkE3ra3msK3ZiTs8pt/rR1iqYy97Goysj0OrHW0jXlWQE0jsIWjbqSrP0JnpDPagRM4qo/lNl0z1i28Gq4MRlrCq2F0KKUvKScKML+2mOyGA+iwYv4YRUtqvX4990R1DwwwGTfNayFASEQrRmv48L8q9M3UpoKIs7XbCt795pL9XAEqcpMsj1JZRUZhzH3DpHZ45QuhF9tUbtnoYIWUJG9RJ9ISpB3QCrZisrWgVO6y4+IzVByGHzTDjN8lnM33JWj0PVy3zVBXGNMuyJ/FNEPXQ0oLbxqWOqX0mn59BBVXw2DoYthxwK0xuC8GGzEfzXngqjtP99vA+PJ07cxi4UnNlVwznRqZFuv8hzrRWdvYb1Y/0aRBF5YrQu2wQeHCC2h6JIL3uGLQcJlahoZsPrHd0TLfFdX2JbaCCA6suNOlIcWPOAsnriVBk8SI8nlNgaAAJ9YTXCphIlPosBuC5u5Q8pekI6Qx6/MGz1GANNgafWfeQ7UpqX3CIaSioz4f2KoGqS7kfY9Vb/wNe0oslSS4Ra7BItDMBcWL8CECGz1MDYd+ZBUdBrGvtIHYBvla/yPaCax5DNJfXIgu790igA/d8YCtUElN6CcoYcZRcP/cXW10TBKFqXeXrSMS6NZ+hMk4VLvFA+Zzi21OxlNRPZodCYSTfOVlqOFIjuAotjB6Dyit+zkQILlnAicDerbwR4fZq4I+LN5AvMKz/c8OES4HCmtCex2BP+1kTdxHbW0/EZDhtE5fZNqM5cYDsV82aVtjTGH" 
            }
        },


        {
            "information": {
                "name": "Tears of Steel - aac stereo, 5.1, subtitles",
                "stream": "dash_ondemand",
                "uri": "http://ext.inisoft.co.kr/demo/TOS/dash_ondemand/demo.mpd",
                "image": "http://ext.inisoft.co.kr/demo/TOS/img/TOS_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/TOS/img/thumbnails.xml",
                "description": null,
                "contentID": "733",
                "duration": 734,
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
                        "description": "English 5.1 Channel",
                        "code": "eng"

                }],
                "subtitle-tracks": [{
                        "name": "text_stream_eng",
                        "description": "English",
                        "code": "eng",
			"embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/TOS/english.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/TOS/english.ttml"
                        }, {
                        "name": "text_stream_ger",
                        "description": "German",
                        "code": "ger",
			"embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/TOS/german.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/TOS/german.ttml"
                }]

            },
            "drm": [
		{
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYSoIgYm8tFV1f6jlPBdwK5U4eVKEj+RD1cN1NVpiWW4oOZWxWjcDVTZ4rMT/ajkJKLAIkjeY+WS+1RGeLKuVaiTspuKu6U2h2G7D3Jz2YpmS2HfHHjM01wX7OC7JsP/KZwGRDN/1G+4ybrOS3jtcsuYA/zrvJVNms4eoiryAFWUJjBrThwlASAjA1RuLzzdX0N+GR0IhMUjVhzxhKsd0qo4xY5fzpmV03T6VliTyfHE76RCR9KOqp/XiOcZwmBkGCYHhe9ixGbDtyyzI/9jE2WvcJKbGqh+I06J/Nhw6F7P7uEQf+MWeTbnZKy+JK/vc52XtniVeH0tKwHpzsT5m4SPBKQpjrO+MFQ0Mx6wint6zKyXNkuTGDEfLxc+q7gZ4kKb+FX/isaNzvj9vKjAacFDLMrxtQknsqIi/jJZPGwDKXLSmUIpKZ4mvXnDTxQQuOv+JSoCZA7Di6FHKdiyQ/rEco2zPo85oKXFcQO9VZEhh5F1FHkJ7OXVbpay984+vZjOK/Te02hDYKLNYXtjmSO+fJRMqjxQfrkl3TM3jjS11d7Pk/eoKOkmqvdnRgyNj18vFgMHgrIiG2SJ3EOrE4OubdHDTgyl5k/uEF3mmAPHa4v4LNbVPHzOHNJCZH+LDBkNhk1DeuTp8edaTi5JxbKYBMuXYBwj+VJrR+YsDL7Nu7dWaNyYnsYoH6VyT1QyM7sMtl/+Ebwt4nZCpSnn0pn+Tq6gdVUYuKaAmpNPJ9MhHWNvlE5Pjl4ZQdXBginToEwK45Tf8METduxLa4QCbOLR64PTYTnLv9E5oiV3T3V4Ro07J0jcjC5ysW7hMMig0qIgokudCWFr6zWltkdkkkpvt4ap2uFyf8kiz5SgKvuruimvMtLce4mZT7J2L6yEGLGUV5ZBwMmerMXmOC0nBWEN+DIJTEql5yxKge7Qfz5aZaBcEUY9Pmg+tVKT2pTl66WwMn7QFcl8O05m7yPFKde23tS1awiJsFl5K4UmBf5GFPyrjj6Ko57ZiYcALgHdPcfH5FPQoPBsHM5kfLBquh0Vmua3GUpzP8Qy2dyPDCSgn19qybdytJ0hI8u3mpMAlHGNgBHwAGwabSLCBM0p4UUHUuJ8ATSBWnkLAkAVpUfwb9nkOPIAqRm0lsQxybkoJ9Q9X2/ROWShz2iTQ3wt5juZfaStkDJgHTjVHKrdBQOLx"
            	},
                {
                "type": "widevine",
                "lic-acq-url": "http://ec2-54-64-238-113.ap-northeast-1.compute.amazonaws.com/widevine-dbg",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYWaVqiW7leGCLYe2Q4aaf0XR1pKNZCI/+NsR/q0X4OnHBuP+tqijgDPTZgHuvQOrgJTQ9GWD9v56iHFizhH6LYOLrZGQUjMz2IeX0ZlaRBKapT3SniRLDwXN11LpHrBWJxh+8nMrpWtINfOTepP33FF0AyXMC5ZxbngmCnxxfAtjUYneBntfete4EOo8bIbhfZ/7+8LR6I4Zt3ABSz2gz4hlw+9wvc1Sbi7YeyS9b45+YKzb3fq/fSICfW2/9NP1EYsANUFhmlRcGfAAS5g74799X/k2twMeUDIoRWY1LuYjKLNU9TPgY0SPDluK67XiUc/xE9IXg2e8MH6HjViSg6GsDTtks3xtj33GITuXbSXTtTx6csBCQdLgSOaDXPSfnKDMM3wJhIpJRHMEk/+TDD9jAwJzGmg6Ogctz93aWV+WfLlkx/mvYH9EL0K5hV1/foXuXphgYFkVOTmX87XU+TTgW7UXroX0G3Hhty5z/9TZ9BHdNwuH6AdBt/mq4glVl3o971bWpzzszRecRLBwQw06Kd8xXUBscyGiIcmTEf3erZajKonbXql2azVlNmFR8bxTIWNHCwPhEDAQhaIOwtmFQldA700Z/OCwHnstvZqlV1T1xi9JV9aS5MJgxeotv/SzSqZmFHNEjM3YpDDuoddW6VFZO762sodRmq7rRzkDMZHJt18xjrEarkXipCB7is5CvKZBXL5m3a2gvlQfPYvHOj06QfLCsWufdOo0sCSGUalRSjC3/Av0EmIA+9IP4JzfFZuC8RZAiWPmPuTI+UpSItHnIE9xuwgg3WuvlMffRsPg+mNHTR7zJRPXt65DwZGMZFYy5uHy0ouAy8sVL1u9sdyp4G+wJL7q+b3o6UhAAIYoRIEyw/ZIVmWp54UB3Zy1501Wsd6bFAL4ntMoY6OMkRgULwyqzDWXSRhX9HY0mFJxtR97lz2K+hupVFYkv7wesP0BRwb1d+AuPCxk9uC7Bcst22JwZRrd/K9ujjkvtdqJoEvzkUj/Q8R/jv27KrNmcIt0OHhniM8SmeOOiM3t3wQLRx7mbrjU3AW3XSQ7YTu246nzabkUcaXYMUPve59EZUUPVgZw+RaOs1tBULd8aL5b2QU4O4qWn0Hmc2D+bfUeQlvAbH2k/PUPiLj99D3Elw2tTqT/dRedaAHL7HGg8SqjmR65WYj3QGHmbFX1g4EfwHf+liuxlpEY9hbUYDCbvsN2uHoXFLLDBQz5W9rvH3yyB65EyO8hyTTi604Mf1kA86vF1DbSRVBVTlvCB2RuqGXd9CiMTqL6yifCy1M="
		}
           ]

        },

        {
            "information": {
                "name": "Tears of Steel - aac stereo, 5.1, subtitles",
                "stream": "ssff",
                "uri": "http://ext.inisoft.co.kr/demo/TOS/ssff-sub.ism/manifest",
                "image": "http://ext.inisoft.co.kr/demo/TOS/img/TOS_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/TOS/img/thumbnails.xml",
                "description": null,
                "contentID": "734",
                "duration": 734,
                "video-resolutions": [
                    "640x360",
                    "480x270",
                    "960x540",
                    "1920x1080",
                    "1280x720"
                ],
                "audio-tracks": [{
                        "name": "audio_eng",
                        "description": "English Stereo",
                        "code": "eng"
                        }, {
                        "name": "audio_eng_5.1",
                        "description": "English 5.1 Channel",
                        "code": "eng"

                }],
                "subtitle-tracks": [{
                        "name": "text_stream_eng",
                        "description": "English",
                        "code": "eng",
			"embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/TOS/english.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/TOS/english.ttml"
                        }, {
                        "name": "text_stream_ger",
                        "description": "German",
                        "code": "ger",
			"embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/TOS/german.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/TOS/german.ttml"
                }]

            },
            "drm": {
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYSoIgYm8tFV1f6jlPBdwK5U4eVKEj+RD1cN1NVpiWW4oOZWxWjcDVTZ4rMT/ajkJKLAIkjeY+WS+1RGeLKuVaiTspuKu6U2h2G7D3Jz2YpmS2HfHHjM01wX7OC7JsP/KZwGRDN/1G+4ybrOS3jtcsuYA/zrvJVNms4eoiryAFWUJjBrThwlASAjA1RuLzzdX0N+GR0IhMUjVhzxhKsd0qo4xY5fzpmV03T6VliTyfHE76RCR9KOqp/XiOcZwmBkGCYHhe9ixGbDtyyzI/9jE2WvcJKbGqh+I06J/Nhw6F7P7uEQf+MWeTbnZKy+JK/vc52XtniVeH0tKwHpzsT5m4SPBKQpjrO+MFQ0Mx6wint6zKyXNkuTGDEfLxc+q7gZ4kKb+FX/isaNzvj9vKjAacFDLMrxtQknsqIi/jJZPGwDKXLSmUIpKZ4mvXnDTxQQuOv+JSoCZA7Di6FHKdiyQ/rEco2zPo85oKXFcQO9VZEhh5F1FHkJ7OXVbpay984+vZjOK/Te02hDYKLNYXtjmSO+fJRMqjxQfrkl3TM3jjS11d7Pk/eoKOkmqvdnRgyNj18vFgMHgrIiG2SJ3EOrE4OubdHDTgyl5k/uEF3mmAPHa4v4LNbVPHzOHNJCZH+LDBkNhk1DeuTp8edaTi5JxbKYBMuXYBwj+VJrR+YsDL7Nu7dWaNyYnsYoH6VyT1QyM7sMtl/+Ebwt4nZCpSnn0pn+Tq6gdVUYuKaAmpNPJ9MhHWNvlE5Pjl4ZQdXBginToEwK45Tf8METduxLa4QCbOLR64PTYTnLv9E5oiV3T3V4Ro07J0jcjC5ysW7hMMig0qIgokudCWFr6zWltkdkkkpvt4ap2uFyf8kiz5SgKvuruimvMtLce4mZT7J2L6yEGLGUV5ZBwMmerMXmOC0nBWEN+DIJTEql5yxKge7Qfz5aZaBcEUY9Pmg+tVKT2pTl66WwMn7QFcl8O05m7yPFKde23tS1awiJsFl5K4UmBf5GFPyrjj6Ko57ZiYcALgHdPcfH5FPQoPBsHM5kfLBquh0Vmua3GUpzP8Qy2dyPDCSgn19qybdytJ0hI8u3mpMAlHGNgBHwAGwabSLCBM0p4UUHUuJ8ATSBWnkLAkAVpUfwb9nkOPIAqRm0lsQxybkoJ9Q9X2/ROWShz2iTQ3wt5juZfaStkDJgHTjVHKrdBQOLx"
            }
        },



        {
            "information": {
                "name": "Elephant Dream - aac stereo, subtitles",
                "stream": "ssff",
                "uri": "http://ext.inisoft.co.kr/demo/ED/ssff.ism/manifest",
                "image": "http://ext.inisoft.co.kr/demo/ED/img/ED_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/ED/img/thumbnails.xml",
                "description": null,
                "contentID": "888",
                "duration": 888,
                "video-resolutions": [
                    "640x360",
                    "480x270",
                    "960x540",
                    "1920x1080",
                    "1280x720"
                ],
                "audio-tracks": [{
                        "name": "audio_eng",
                        "description": "English Stereo",
                        "code": "eng"
			}, {
                        "name": "audio_comment",
                        "description": "English Commentary",
                        "code": "eng"
			}, {
                        "name": "audio_esp",
                        "description": "Spanish Stereo",
                        "code": "esp"
                }],
                "subtitle-tracks": [{
                        "name": "text_eng",
                        "description": "English",
                        "code": "eng",
			"embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/ED/english.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/ED/english.ttml"
                        }, {
                        "name": "text_ger",
                        "description": "German",
                        "code": "ger",
			"embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/ED/german.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/ED/german.ttml"
                }]

            },
            "drm": {
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "cw8hgOGy9UaqO7sPBTiNYc6HYviBHB957UsnEqVMTCvRYmO3TUGAG52N3tEWvJTtkt/iF+EFfpEma/4G9DQ4ueHwFZSxYx8YzQHBqvuaPe2LgZGwLVRS87Sx6I5bxf04zTnGHNdNVV+jjxXx7o8KVfjouTrk8tkx529SdnbaGMJCLtTVygwHbAuZpE+J1VYP5YCBDtklg/WkTB26UJaJC0SIxdWzCsU7dJA0QqxNXGHNluqGn1tStrhT5JkcoIAuvQ6GwH2n3PeXAQS//iu0kSxUmEy/7vXIX8WlGw+CZpnBjSM4LAlx/dAdAMDRtDoOEPBbHVoLoLH9qJdyCWx7igIgAuTRwWtdxQ638yh6QuCEuKeUDjUj9hKLK6eB7RCPjuz1x8pjzmplJH6/3vqsdlMYpllyrQZcssQLKUOonfzblR9VGWJgnL0knbRGuLW0fStEXCMcQR4rGNKiX/i4goZPcUbqV3clJXbvkbCAOFYYK+8fKzY5441byTMGSSAE6zpv5fn5McbOXCp+2xCQ9H0DD7Rtwy2pxe2fOThv2LpgyQJUPvc5XHI7Kc9uos3HYofvep+kRzNOtvQEaCFeHRf7UHX5OYYFMzkd9CgGqn/I8rMiaiQkUA4wEvuKpFX2+Wltlvz7auzExcParotb8tHDNmfxfkA7CH9pAaTtRAnn4Kb01DMTU6Y4IlVzrFqHND3vb6Eqq5OtuBFG0Yqw4CEnvXOilNxbfBpavF4PdkAOKK2nFccN+DvRcj+ypPcJfyQKbn++2LVOtsj7RLlJvTC5t2h933Am8vK+R2GcUIrBtQrNY3UHLAZlpgiYZTj/q05DNZiUu9Ff4XYMjCF4F+i+/brnxsImMfeFehB6AkW0jV+ENw923QKhsZ8r7SgQZMa3EzPQxv+lLf/zBRU3/EmPr8DeLqjL4rQ4JSv3eAhqDIFAE2KrrwyvkrY8fjyNuWkjjAzi9j2pbcz2XccWXgKoraCEErJC29Al4LhvMT+L4yg+swZSDJ50uPjYSRGfg0o0UBx2IJSM6SiyhZcoS12mPdZdVxbhQFPw351ui4w31weyLHxRPXWppdPOv2fM9Hu/qZij6zHHyoPm8It4d8WyoAQ40UcMZxYPVdnopex5K9/3NcIMSExGWss37SNFws0lKPD9b1HBgZ4EEKQGlGhViU8s7SmjyjTR0wsY/OnsDBP90A27lD/EFiwyj1VM"
            }

        },

        {
            "information": {
                "name": "4K HEVC Tears of Steel",
                "stream": "dash_ondemand",
                "uri": "http://ext.inisoft.co.kr/demo/Tos4K/dash_ondemand/demo.mpd",
                "image": "http://ext.inisoft.co.kr/demo/TOS/img/TOS_cover.jpg",
                "thumbnails": "http://ext.inisoft.co.kr/demo/TOS/img/thumbnails.xml",
                "description": null,
                "contentID": "73310",
                "duration": 734,
                "video-resolutions": [
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
                        "description": "English 5.1 Channel",
                        "code": "eng"

                }],
                "subtitle-tracks": [{
                        "name": "text_stream_eng",
                        "description": "English",
                        "code": "eng",
                        "embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/TOS/english.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/TOS/english.ttml",
                        "vtt": "http://ext.inisoft.co.kr/demo/TOS/english.vtt"
                        }, {
                        "name": "text_stream_ger",
                        "description": "German",
                        "code": "ger",
                        "embeded" : false,
                        "sami": "http://ext.inisoft.co.kr/demo/TOS/german.sami",
                        "ttml": "http://ext.inisoft.co.kr/demo/TOS/german.ttml",
                        "vtt": "http://ext.inisoft.co.kr/demo/TOS/german.vtt"
                }]

            },

            "drm": [
                {
                "type": "playready",
                "lic-acq-url": "http://playready.drmkeyserver.com/playready/rightsmanager.asmx",
                "lic-acq-custom": "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"
                }
           ]

        }


    ]
}

<?php
    exit();
?>
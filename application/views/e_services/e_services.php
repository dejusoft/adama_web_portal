<div id="content">
    <!-- <h1><span class="read"> Service Page </span></h1> -->
    <hr>
    <div class="content-wrapper">
        <div id="p_p_id_103_" class="portlet-boundary portlet-boundary_103_ portlet-static portlet-static-end "> <span id="p_103"></span>
            <div class="portlet-body"> </div>
        </div>
        <div class="NewLayout_eServicesHome_Ver2" id="main-content" role="main">
            <div class="portlet-layout">
                <div class="aui-w70 portlet-column portlet-column-first" id="column-1">
                    <div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column_column-1">
                        <div id="p_p_id_56_INSTANCE_fE1En920ni8y_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_fE1En920ni8y"></span>
                            <div class="portlet-body">
                                <div class="portlet-borderless-container" style="">
                                    <div class="portlet-body">
                                        <div class="journal-content-article" id="article_10154_10180_12286328_4.3">
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                            <link href="/documents/10180/3c96047b-cd70-4c4e-86f9-bb4e99674eb7" rel="stylesheet" type="text/css">
                                            <style type="text/css">
                                                .aligndiv2 {
                                                    text-align: justify;
                                                }
                                            </style>
                                            <div class="aligndiv2">
                                                <p>
                                                    <font color="#145c97"><span style="font-size: 20px;"><b><a href="https://Adama.gov.in/eservices-consolidated">e-Services</a></b></span></font>
                                                </p> <br>
                                                <p> The e-Services offered by various government departments of Adama have been grouped under the following categories. Users may select the category of their choices or<a href="https://Adama.gov.in/eservices-consolidated"> click here..... </a></p>
                                            </div>
                                        </div>
                                        <div class="entry-links"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aui-w30 portlet-column portlet-column-last" id="column-2">
                    <div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column_column-2">
                        <div id="p_p_id_56_INSTANCE_IfxB98V8rGsN_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-journal-content ">
                            <span id="p_56_INSTANCE_IfxB98V8rGsN"></span>
                            <div class="portlet-body">
                                <section class="portlet" id="portlet_56_INSTANCE_IfxB98V8rGsN">
                                    <!-- <header class="portlet-topper">
                                    <h2 class="portlet-title">
                                         <span class="portlet-title-text" tabindex="0">Track Application Status</span> </h2>
                                    <ul class="portlet-topper-toolbar" id="portlet-topper-toolbar_56_INSTANCE_IfxB98V8rGsN" type="toolbar"> </ul>
                                </header> -->
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_12287175_5.2">
                                                    <link href="<?php echo base_url('assets/css/bootstrap min css modal window reduced.css'); ?>" rel="stylesheet">
                                                    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
                                                    <style type="text/css">
                                                        .modal-header,
                                                        h4,
                                                        .close {
                                                            background-color: #145c97;
                                                            color: white !important;
                                                            text-align: center;
                                                            font-size: 30px;
                                                        }

                                                        .modal-footer {
                                                            background-color: #f9f9f9;
                                                        }

                                                        .h1,
                                                        .h2,
                                                        .h3,
                                                        h1,
                                                        h2,
                                                        h3 {
                                                            margin-top: 0;
                                                            margin-bottom: 0;
                                                        }

                                                        .h4 {
                                                            font-size: 14px;
                                                        }
                                                    </style>
                                                    <style type="text/css">
                                                        .US {
                                                            border: 2px solid white;
                                                            width: 100%;
                                                            background-color: #fff;
                                                            position: relative;
                                                        }

                                                        .USimg {
                                                            width: 100%;
                                                        }

                                                        .cnt2 {
                                                            position: relative;
                                                        }

                                                        .image {
                                                            display: block;
                                                            width: 100%;
                                                            height: auto;
                                                        }

                                                        .overlay2 {
                                                            position: absolute;
                                                            bottom: 0;
                                                            left: 0;
                                                            right: 0;
                                                            background-color: rgba(99, 165, 118, .8);
                                                            overflow: hidden;
                                                            width: 100%;
                                                            height: 0;
                                                            transition: .5s ease;
                                                        }

                                                        .cnt2:hover .overlay2 {
                                                            height: 100%;
                                                        }

                                                        .text {
                                                            white-space: nowrap;
                                                            color: white;
                                                            text-align: center;
                                                            font-size: 18px;
                                                            position: absolute;
                                                            overflow: hidden;
                                                            top: 50%;
                                                            left: 50%;
                                                            transform: translate(-50%, -50%);
                                                            -ms-transform: translate(-50%, -50%);
                                                        }
                                                    </style>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        function isAlphaNumeric(evt) {
                                                            var charCode = (evt.which) ? evt.which : event.keyCode;
                                                            if ((charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8) return true;
                                                            else return false;
                                                        }

                                                        function make_base_auth(us, pa) {
                                                            var tok = us + ':' + pa;
                                                            var hash = btoa(tok);
                                                            return 'Basic ' + hash;
                                                        }

                                                        function myFunction() {
                                                            document.getElementById("result").innerHTML = "Loading...";
                                                            var ackNum = document.getElementById("ackNumServicePage").value;
                                                            if (ackNum == "") document.getElementById("result").innerHTML = "Please enter Acknowledgement Number to check status";
                                                            else {
                                                                var us = "mobile_auth";
                                                                var pa = "%;tp!+'aq92@";
                                                                document.getElementById("ackNumServicePage").value = "";
                                                                $.ajax({
                                                                    url: "/UserService/getAppStatus.htm",
                                                                    data: {
                                                                        xmlString: '<data><ackNo>' + ackNum + '</ackNo></data>'
                                                                    },
                                                                    type: 'POST',
                                                                    contentType: 'application/x-www-form-urlencoded',
                                                                    dataType: "json",
                                                                    beforeSend: function(xhr) {
                                                                        xhr.setRequestHeader('Authorization', make_base_auth(us, pa));
                                                                    },
                                                                    success(data) {
                                                                        var res = JSON.stringify(data);
                                                                        var value = JSON.parse(res);
                                                                        if (value.responseStatus == "0") document.getElementById("result").innerHTML = value.exception;
                                                                        else document.getElementById("result").innerHTML = value.appStatus;
                                                                    },
                                                                    error(xml) {
                                                                        document.getElementById("result").innerHTML = "Please try later";
                                                                    }
                                                                });
                                                            }
                                                            $("#transactionModal").modal();
                                                        } /*]]>*/
                                                    </script>
                                                    <div class="modalDiv">
                                                        <div class="USS cnt2" id="functionClick" onclick="" onmouseover="">
                                                            <div class="aligndiv">
                                                                <form action="https://Adama.gov.in/web/guest/citizen-eforms?p_p_id=48_INSTANCE_JlSmRHvXnc2u&amp;_48_INSTANCE_Rm0ozWcteCOw_iframe_eName=getStatusByackNo" method="post"> <input id="ackNumServicePage" name="ackNumServicePage" onkeypress="return isAlphaNumeric(event)" placeholder="Acknowledgement number" style="width:75%;border: 1px solid #bfbbbb;border-radius: 3px;height:35px;padding: 5px;" type="text"> &nbsp;&nbsp;<button onclick="myFunction()" style="background: #4CAF50; color: white; text-shadow: none; height: 33px; padding: 9px;" type="button">Track</button></form> <a class="ilink" id="getStatusByackNo" style="font-weight:bold;margin-left:1px;font-size:medium">View all Transactions </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="transactionModal" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="padding:15px 50px;"> <button class="close" data-dismiss="modal" type="button">×</button>
                                                                    <h4> Transaction Status</h4>
                                                                </div>
                                                                <div class="modal-body" style="padding:40px 50px;">
                                                                    <p id="result" style="text-align: center;font-size: 16px;font-weight: bold;font-family: arial;"> Loading...</p>
                                                                </div>
                                                                <div class="modal-footer"> &nbsp;</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="Post" name="serviceform"> <input id="p_p_id" name="p_p_id" type="hidden"><br> <input id="iframe_eName" name="iframe_eName" type="hidden"></form>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        $(".ilink").on("click", function() {
                                                            if ((Liferay.ThemeDisplay.isSignedIn())) {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms";
                                                                document.getElementById("p_p_id").value = "48_INSTANCE_pSkQDRbUqsW4";
                                                                document.getElementById("iframe_eName").value = this.id;
                                                                document.forms.serviceform.submit()
                                                            } else {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms?S_id=" + this.id;
                                                                document.forms.serviceform.submit()
                                                            }
                                                        });
                                                        $(".accordionMain .frst").slideDown(300);
                                                        $(".accordionMain .item .heading").click(function() {
                                                            var e = $(this).closest(".item");
                                                            var d = $(e).hasClass("open");
                                                            var f = $(e).closest(".accordionMain").find(".open");
                                                            if (d != true) {
                                                                $(f).find(".content").slideUp(300);
                                                                $(f).removeClass("open")
                                                            }
                                                            $(".accordionMain .frst").slideUp(300);
                                                            $(e).toggleClass("open");
                                                            $(e).find(".content").slideToggle(300)
                                                        }); /*]]>*/
                                                    </script>
                                                    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet-layout">
                <div class="aui-w70 portlet-column portlet-column-first">
                    <div class="portlet-layout">
                        <div class="aui-w25 portlet-column portlet-column-first" id="column-3">
                            <div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column_column-3">
                                <div id="p_p_id_56_INSTANCE_O4NgKZTxFizV_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_O4NgKZTxFizV"></span>
                                    <div class="portlet-body">
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_12286506_7.1">
                                                    <p>
                                                        <link href="/documents/10180/e7981763-ba5d-4b88-950e-0018fec0dcfb" rel="stylesheet">
                                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                                        <style type="text/css">
                                                            .modal-body {
                                                                font-size: 16px;
                                                            }

                                                            .modal-body ul li {
                                                                list-style-type: disc;
                                                                margin-left: 5%;
                                                                font-size: 16px;
                                                                line-height: 1.5;
                                                            }

                                                            .modal-header,
                                                            h4,
                                                            .close {
                                                                background-color: #145c97;
                                                                color: white !important;
                                                                text-align: center;
                                                                font-size: 30px;
                                                            }

                                                            .modal-footer {
                                                                background-color: #f9f9f9;
                                                            }

                                                            .h1,
                                                            .h2,
                                                            .h3,
                                                            h1,
                                                            h2,
                                                            h3 {
                                                                margin-top: 0;
                                                                margin-bottom: 0;
                                                            }

                                                            .h4 {
                                                                font-size: 18px;
                                                            }
                                                        </style>
                                                        <style type="text/css">
                                                            .CS {
                                                                width: 100%;
                                                                border: 2px solid white;
                                                                background-color: #fff;
                                                                position: relative;
                                                            }

                                                            .CSimg {
                                                                width: 100%;
                                                            }

                                                            .CS:hover {
                                                                border: 2px solid #887802;
                                                            }

                                                            .cnt {
                                                                position: relative;
                                                            }

                                                            .image {
                                                                display: block;
                                                                width: 100%;
                                                                height: auto;
                                                            }

                                                            .overlay {
                                                                position: absolute;
                                                                bottom: 0;
                                                                left: 0;
                                                                right: 0;
                                                                background-color: rgba(128, 122, 77, 0.8);
                                                                overflow: hidden;
                                                                width: 100%;
                                                                height: 0;
                                                                transition: .5s ease;
                                                            }

                                                            .cnt:hover .overlay {
                                                                height: 100%;
                                                            }

                                                            .text {
                                                                white-space: nowrap;
                                                                color: white;
                                                                text-align: center;
                                                                font-size: 18px;
                                                                position: absolute;
                                                                overflow: hidden;
                                                                top: 50%;
                                                                left: 50%;
                                                                transform: translate(-50%, -50%);
                                                                -ms-transform: translate(-50%, -50%);
                                                            }
                                                        </style>
                                                    </p>
                                                    <div class="modalDiv">
                                                        <div class="CS cnt" id="certificateClick" onclick="" onmouseover="" style="cursor: pointer;">
                                                            <img class="CSimg" src="<?php echo base_url('assets/adama_img/e_services/certificate.png') ?>"><br> <br>
                                                            <p style="text-align:center;font-weight:bold;color: #607D8B;">
                                                                <a id="" style="cursor: pointer;">Certificates</a></p>
                                                            <div class="overlay" id="">
                                                                <div class="text"> CERTIFICATES<br>
                                                                    <font style="font-size:12px;color: #fdfdb1;">View all Services</font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="certificateModal" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="padding:15px 50px;"> <button class="close" data-dismiss="modal" type="button">×</button>
                                                                    <h4> Certificate Services</h4>
                                                                </div>
                                                                <div class="modal-body" style="padding:30px 50px;color:gray;font-size:18px;">
                                                                    <font style="font-weight:bold;">Revenue Development Department </font><br>
                                                                    <ul>
                                                                        <li> <a class="eform_c" href="#" id="CasteCertificate">Caste Certificate</a></li>
                                                                        <li> <a class="eform_c" id="CommunityCertificate">Community Certificate</a></li>
                                                                        <li> <a class="eform_c" id="ConversionCertificate">Conversion Certificate</a></li>
                                                                        <li> <a class="eform_c" id="DependencyCertificate">Dependency Certificate</a></li>
                                                                        <li> <a class="eform_c" id="DestituteCertificate">Destitute Certificate</a></li>
                                                                        <li> <a class="eform_c" id="DomicileCertificate">Domicile Certificate</a></li>
                                                                        <li> <a class="eform_c" id="FamilyMembershipCertificate">Family Membership Certificate</a></li>
                                                                        <li> <a class="eform_c" id="IdentificationCertificate">Identification Certificate</a></li>
                                                                        <li> <a class="eform_c" id="IncomeCertificate">Income Certificate</a></li>
                                                                        <li> <a class="eform_c" id="Inter-casteMarriageCertificate">Inter-caste Marriage Certificate</a></li>
                                                                        <!--<li> <a class="eform_c" id="LegalHeirCertificate">Legal Heir Certificate</a></li>-->
                                                                        <li> <a class="eform_c" id="LifeCertificate">Life Certificate</a></li>
                                                                        <li> <a class="eform_c" id="LocationCertificate">Location Certificate</a></li>
                                                                        <li> <a class="eform_c" id="MinorityCertificate">Minority Certificate</a></li>
                                                                        <li> <a class="eform_c" id="NativityCertificate">Nativity Certificate</a></li>
                                                                        <li> <a class="eform_c" id="NonRemarriageCertificate">Non-Remarriage Certificate</a></li>
                                                                        <li> <a class="eform_c" id="OneandSameCertificate">One and Same Certificate</a></li>
                                                                        <li> <a class="eform_c" id="PossessionCertificate">Possession Certificate</a></li>
                                                                        <li> <a class="eform_c" id="PossessionandNonAttachmentCertificate">Possession and Non-Attachment Certificate</a></li>
                                                                        <li> <a class="eform_c" id="RelationshipCertificate">Relationship Certificate</a></li>
                                                                        <li> <a class="eform_c" id="ResidenceCertificate">Residence Certificate</a></li>
                                                                        <li> <a class="eform_c" id="SolvencyCertificate">Solvency Certificate</a></li>
                                                                        <li> <a class="eform_c" id="ValuationCertificate">Valuation Certificate</a></li>
                                                                        <li> <a class="eform_c" id="WidowWidowerCertificate">Widow Widower Certificate</a></li>
                                                                    </ul> <br> <br>
                                                                    <font style="font-weight:bold;">Local Self Governance Department</font><br>
                                                                    <ul>
                                                                        <li>
                                                                            <!--<a href="/web/guest/birth-death-marriage-certificate">--><a class="eform_c" id="Birth_Certificate"> Birth Certificate</a></li>
                                                                        <li>
                                                                            <!--<a href="/web/guest/birth-death-marriage-certificate">--><a class="eform_c" id="Death_Certificate"> Death Certificate</a></li>
                                                                        <li>
                                                                            <!--<a href="/web/guest/birth-death-marriage-certificate">--><a class="eform_c" id="Marriage_Certificate"> Marriage Certificate</a></li>
                                                                    </ul> <br> <br> <!-- <font style="font-weight:bold;">Registration Department</font><br /> <ul> <li> <a class="eform_c" id="Registration Encumbrance Certificate">Encumbrance Certificate</a></li> <li> <a class="eform_c" id="">Certified copy</a></li> </ul> <br /> <br /> -->
                                                                    <font style="font-weight:bold;">Vocational Higher Secondary Education</font><br>
                                                                    <ul>
                                                                        <li> <a class="eform_c" id="VHSEEquivalencyCertificate">Equivalency Certificate</a></li>
                                                                        <li> <a class="eform_c" id="VHSEDuplicateCertificate">Duplicate Certificate</a></li>
                                                                        <li> <a class="eform_c" id="VHSEMigrationCertificate">Migration Certificate</a></li>
                                                                    </ul> <br> <br> <!-- <font style="font-weight:bold;">Motor Vehicle Department </font><br /> <ul> <li> <a class="eform" id="NOC">Certificate of Fitness application</a></li> <li> <a class="eform" id="CF_Application">No Objection Certificate (NOC)</a></li> </ul>-->
                                                                </div>
                                                                <div class="modal-footer"> &nbsp;</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="Post" name="serviceform"> <input id="p_p_id" name="p_p_id" type="hidden"><br> <input id="iframe_eName" name="iframe_eName" type="hidden"></form>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        $(".eform_c").on("click", function() {
                                                            if ((Liferay.ThemeDisplay.isSignedIn())) {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms";
                                                                document.getElementById("p_p_id").value = "48_INSTANCE_pSkQDRbUqsW4";
                                                                document.getElementById("iframe_eName").value = this.id;
                                                                document.forms.serviceform.submit()
                                                            } else {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms?S_id=" + this.id;
                                                                document.forms.serviceform.submit()
                                                            }
                                                        }); /*]]>*/
                                                    </script>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        $(document).ready(function() {
                                                            $("#certificateClick").click(function() {
                                                                $("#certificateModal").modal()
                                                            })
                                                        }); /*]]>*/
                                                    </script>
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aui-w25 portlet-column" id="column-4">
                            <div class="portlet-dropzone portlet-column-content" id="layout-column_column-4">
                                <div id="p_p_id_56_INSTANCE_dA9OpFy29xXk_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_dA9OpFy29xXk"></span>
                                    <div class="portlet-body">
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_15564051_3.1">
                                                    <p>
                                                        <link href="/documents/10180/e7981763-ba5d-4b88-950e-0018fec0dcfb" rel="stylesheet">
                                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                                        <style type="text/css">
                                                            .modal-body {
                                                                font-size: 16px;
                                                            }

                                                            .modal-body ul li {
                                                                list-style-type: disc;
                                                                margin-left: 5%;
                                                                font-size: 16px;
                                                                line-height: 1.5;
                                                            }

                                                            .modal-header,
                                                            h4,
                                                            .close {
                                                                background-color: #145c97;
                                                                color: white !important;
                                                                text-align: center;
                                                                font-size: 24px !important;
                                                            }

                                                            .modal-footer {
                                                                background-color: #f9f9f9;
                                                            }

                                                            .h1,
                                                            .h2,
                                                            .h3,
                                                            h1,
                                                            h2,
                                                            h3 {
                                                                margin-top: 0;
                                                                margin-bottom: 0;
                                                            }

                                                            .h4 {
                                                                font-size: 18px;
                                                            }
                                                        </style>
                                                        <style type="text/css">
                                                            .US {
                                                                border: 2px solid white;
                                                                width: 100%;
                                                                background-color: #fff;
                                                                position: relative;
                                                            }

                                                            .USimg {
                                                                border-bottom: 2px solid #62a475;
                                                                width: 100%;
                                                            }

                                                            .US:hover {
                                                                border: 2px solid #026d22;
                                                            }

                                                            .cnt2 {
                                                                position: relative;
                                                            }

                                                            .image {
                                                                display: block;
                                                                width: 100%;
                                                                height: auto;
                                                            }

                                                            .overlay2 {
                                                                position: absolute;
                                                                bottom: 0;
                                                                left: 0;
                                                                right: 0;
                                                                background-color: rgba(87, 142, 103, 0.8);
                                                                overflow: hidden;
                                                                width: 100%;
                                                                height: 0;
                                                                transition: .5s ease;
                                                            }

                                                            .cnt2:hover .overlay2 {
                                                                height: 100%;
                                                            }

                                                            .text {
                                                                white-space: nowrap;
                                                                color: white;
                                                                text-align: center;
                                                                font-size: 18px;
                                                                position: absolute;
                                                                overflow: hidden;
                                                                top: 50%;
                                                                left: 50%;
                                                                transform: translate(-50%, -50%);
                                                                -ms-transform: translate(-50%, -50%);
                                                            }
                                                        </style>
                                                    </p>
                                                    <div class="modalDiv">
                                                        <div class="US cnt2" id="utilityClick" onclick="" onmouseover="" style="cursor: pointer;">
                                                            <img class="USimg" src="<?php echo base_url('assets/adama_img/e_services/utility.png') ?>"><br> <br>
                                                            <p style="text-align:center;font-weight:bold;color: #607D8B;"> <a id="" style="cursor: pointer;">Utility Payment</a></p>
                                                            <div class="overlay2" id="">
                                                                <div class="text"> UTILITY PAYMENT<br>
                                                                    <font style="font-size:12px;color: #fdfdb1;">View all Services</font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <form method="Post" name="serviceform"> <input id="p_p_id" name="p_p_id" type="hidden"><br> <input id="iframe_eName" name="iframe_eName" type="hidden"></form>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        $(".eform_u").on("click", function() {
                                                            if ((Liferay.ThemeDisplay.isSignedIn())) {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms";
                                                                document.getElementById("p_p_id").value = "48_INSTANCE_pSkQDRbUqsW4";
                                                                document.getElementById("iframe_eName").value = this.id;
                                                                document.forms.serviceform.submit()
                                                            } else {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms?S_id=" + this.id;
                                                                document.forms.serviceform.submit()
                                                            }
                                                        });
                                                        $(document).ready(function() {
                                                            $("#utilityClick").click(function() {
                                                                $("#utilityModal").modal()
                                                            })
                                                        }); /*]]>*/
                                                    </script>
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aui-w25 portlet-column" id="column-5">
                            <div class="portlet-dropzone portlet-column-content" id="layout-column_column-5">
                                <div id="p_p_id_56_INSTANCE_Xkb0TdmGW13W_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_Xkb0TdmGW13W"></span>
                                    <div class="portlet-body">
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_16207381_1.5">
                                                    <p>
                                                        <link href="/documents/10180/e7981763-ba5d-4b88-950e-0018fec0dcfb" rel="stylesheet">
                                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                                        <style type="text/css">
                                                            .modal-body {
                                                                font-size: 16px;
                                                            }

                                                            .modal-body ul li {
                                                                list-style-type: disc;
                                                                margin-left: 5%;
                                                                font-size: 16px;
                                                                line-height: 1.5;
                                                            }

                                                            .modal-header,
                                                            h4,
                                                            .close {
                                                                background-color: #145c97;
                                                                color: white !important;
                                                                text-align: center;
                                                                font-size: 24px !important;
                                                            }

                                                            .modal-footer {
                                                                background-color: #f9f9f9;
                                                            }

                                                            .h1,
                                                            .h2,
                                                            .h3,
                                                            h1,
                                                            h2,
                                                            h3 {
                                                                margin-top: 0;
                                                                margin-bottom: 0;
                                                            }

                                                            .h4 {
                                                                font-size: 18px;
                                                            }
                                                        </style>
                                                        <style type="text/css">
                                                            .PS {
                                                                border: 2px solid white;
                                                                width: 100%;
                                                                background-color: #fff;
                                                                position: relative;
                                                            }

                                                            .PSimg {
                                                                width: 100%;
                                                            }

                                                            .PS:hover {
                                                                border: 2px solid #797878;
                                                            }

                                                            .cnt3 {
                                                                position: relative;
                                                            }

                                                            .image {
                                                                display: block;
                                                                width: 100%;
                                                                height: auto;
                                                            }

                                                            .overlay3 {
                                                                position: absolute;
                                                                bottom: 0;
                                                                left: 0;
                                                                right: 0;
                                                                background-color: rgba(132, 128, 128, 0.8);
                                                                overflow: hidden;
                                                                width: 100%;
                                                                height: 0;
                                                                transition: .5s ease;
                                                            }

                                                            .cnt3:hover .overlay3 {
                                                                height: 100%;
                                                            }

                                                            .text {
                                                                white-space: nowrap;
                                                                color: white;
                                                                text-align: center;
                                                                font-size: 18px;
                                                                position: absolute;
                                                                overflow: hidden;
                                                                top: 50%;
                                                                left: 50%;
                                                                transform: translate(-50%, -50%);
                                                                -ms-transform: translate(-50%, -50%);
                                                            }
                                                        </style>
                                                    </p>
                                                    <div class="modalDiv">
                                                        <div class="PS cnt3" id="permitClick" onclick="" onmouseover="" style="cursor: pointer;">
                                                            <img class="PSimg" src="<?php echo base_url('assets/adama_img/e_services/permits.png') ?>"><br> <br>
                                                            <p style="text-align:center;font-weight:bold;color: #607D8B;"> <a id="" style="cursor: pointer;">Permit/Licenses</a></p>
                                                            <div class="overlay3" id="">
                                                                <div class="text"> PERMIT/LICENSES<br>
                                                                    <font style="font-size:12px;color: #fdfdb1;">View all Services</font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="permitModal" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="padding:15px 50px;"> <button class="close" data-dismiss="modal" type="button">×</button>
                                                                    <h4> Permit/Licenses Services</h4>
                                                                </div>
                                                                <div class="modal-body" style="padding:30px 50px;color:gray;font-size:18px;"> <b>Local Self Governance Department </b><br>
                                                                    <ul>
                                                                        <li> <a class="eform_p" id="Building_Permit">Building Permit</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="modal-footer"> &nbsp;</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="Post" name="serviceform"> <input id="p_p_id" name="p_p_id" type="hidden"><br> <input id="iframe_eName" name="iframe_eName" type="hidden"></form>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        $(".eform_p").on("click", function() {
                                                            if ((Liferay.ThemeDisplay.isSignedIn())) {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms";
                                                                document.getElementById("p_p_id").value = "48_INSTANCE_pSkQDRbUqsW4";
                                                                document.getElementById("iframe_eName").value = this.id;
                                                                document.forms.serviceform.submit()
                                                            } else {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms?S_id=" + this.id;
                                                                document.forms.serviceform.submit()
                                                            }
                                                        });
                                                        $(document).ready(function() {
                                                            $("#permitClick").click(function() {
                                                                $("#permitModal").modal()
                                                            })
                                                        }); /*]]>*/
                                                    </script>
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aui-w25 portlet-column portlet-column-last" id="column-6">
                            <div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column_column-6">
                                <div id="p_p_id_56_INSTANCE_lAOAm6FLeQQc_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_lAOAm6FLeQQc"></span>
                                    <div class="portlet-body">
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_12286746_2.5">
                                                    <link href="/documents/10180/e7981763-ba5d-4b88-950e-0018fec0dcfb" rel="stylesheet">
                                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                                    <style type="text/css">
                                                        .modal-header,
                                                        h4,
                                                        .close {
                                                            background-color: #145c97;
                                                            color: white !important;
                                                            text-align: center;
                                                            font-size: 30px;
                                                        }

                                                        .modal-footer {
                                                            background-color: #f9f9f9;
                                                        }

                                                        .h1,
                                                        .h2,
                                                        .h3,
                                                        h1,
                                                        h2,
                                                        h3 {
                                                            margin-top: 0;
                                                            margin-bottom: 0;
                                                        }

                                                        .h4 {
                                                            font-size: 18px;
                                                        }
                                                    </style>
                                                    <style type="text/css">
                                                        .WS {
                                                            width: 100%;
                                                            border: 2px solid white;
                                                            background-color: #fff;
                                                            position: relative;
                                                        }

                                                        .WSimg {
                                                            width: 100%;
                                                        }

                                                        .WS:hover {
                                                            border: 2px solid #186b9a;
                                                        }

                                                        .cnt4 {
                                                            position: relative;
                                                        }

                                                        .image {
                                                            display: block;
                                                            width: 100%;
                                                            height: auto;
                                                        }

                                                        .overlay4 {
                                                            position: absolute;
                                                            bottom: 0;
                                                            left: 0;
                                                            right: 0;
                                                            background-color: rgba(104, 142, 165, 0.8);
                                                            overflow: hidden;
                                                            width: 100%;
                                                            height: 0;
                                                            transition: .5s ease;
                                                        }

                                                        .cnt4:hover .overlay4 {
                                                            height: 100%;
                                                        }

                                                        .text {
                                                            white-space: nowrap;
                                                            color: white;
                                                            text-align: center;
                                                            font-size: 18px;
                                                            position: absolute;
                                                            overflow: hidden;
                                                            top: 50%;
                                                            left: 50%;
                                                            transform: translate(-50%, -50%);
                                                            -ms-transform: translate(-50%, -50%);
                                                        }
                                                    </style>
                                                    <div class="modalDiv">
                                                        <div class="WS cnt4" id="" onclick="location.href = '/web/guest/schemesearch'" onmouseover="" style="cursor: pointer;">
                                                            <img class="WSimg" src="<?php echo base_url('assets/adama_img/e_services/schemes.png') ?>"><br> <br>
                                                            <p style="text-align:center;font-weight:bold;color: #607D8B;"> <a id="" style="cursor: pointer;">Welfare Schemes</a></p>
                                                            <div class="overlay4" id="">
                                                                <div class="text"> WELFARE SCHEMES<br>
                                                                    <font style="font-size:12px;color: #fdfdb1;">Click here</font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-layout">
                        <div class="aui-w25 portlet-column portlet-column-first" id="column-7">
                            <div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column_column-7">
                                <div id="p_p_id_56_INSTANCE_OQ69fqhlAOGZ_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_OQ69fqhlAOGZ"></span>
                                    <div class="portlet-body">
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_12287026_2.8">
                                                    <p>
                                                        <link href="/documents/10180/e7981763-ba5d-4b88-950e-0018fec0dcfb" rel="stylesheet">
                                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                                        <style type="text/css">
                                                            .modal-body {
                                                                font-size: 16px;
                                                            }

                                                            .modal-body ul li {
                                                                list-style-type: disc;
                                                                margin-left: 5%;
                                                                font-size: 16px;
                                                                line-height: 1.5;
                                                            }

                                                            .modal-header,
                                                            h4,
                                                            .close {
                                                                background-color: #145c97;
                                                                color: white !important;
                                                                text-align: center;
                                                                font-size: 30px;
                                                            }

                                                            .modal-footer {
                                                                background-color: #f9f9f9;
                                                            }

                                                            .h1,
                                                            .h2,
                                                            .h3,
                                                            h1,
                                                            h2,
                                                            h3 {
                                                                margin-top: 0;
                                                                margin-bottom: 0;
                                                            }

                                                            .h4 {
                                                                font-size: 18px;
                                                            }
                                                        </style>
                                                        <style type="text/css">
                                                            .IS {
                                                                border: 2px solid white;
                                                                width: 100%;
                                                                background-color: #fff;
                                                                position: relative;
                                                            }

                                                            .ISimg {
                                                                width: 100%;
                                                            }

                                                            .IS:hover {
                                                                border: 2px solid #984d1b;
                                                            }

                                                            .cnt6 {
                                                                position: relative;
                                                            }

                                                            .image {
                                                                display: block;
                                                                width: 100%;
                                                                height: auto;
                                                            }

                                                            .overlay6 {
                                                                position: absolute;
                                                                bottom: 0;
                                                                left: 0;
                                                                right: 0;
                                                                background-color: rgba(162, 94, 50, 0.8);
                                                                overflow: hidden;
                                                                width: 100%;
                                                                height: 0;
                                                                transition: .5s ease;
                                                            }

                                                            .cnt6:hover .overlay6 {
                                                                height: 100%;
                                                            }

                                                            .text {
                                                                white-space: nowrap;
                                                                color: white;
                                                                text-align: center;
                                                                font-size: 18px;
                                                                position: absolute;
                                                                overflow: hidden;
                                                                top: 50%;
                                                                left: 50%;
                                                                transform: translate(-50%, -50%);
                                                                -ms-transform: translate(-50%, -50%);
                                                            }
                                                        </style>
                                                    </p>
                                                    <div class="modalDiv">
                                                        <div class="IS cnt6" id="infoClick" onclick="" onmouseover="" style="cursor: pointer;">
                                                            <img class="ISimg" src="<?php echo base_url('assets/adama_img/e_services/information service.png') ?>"><br> <br>
                                                            <p style="text-align:center;font-weight:bold;color: #607D8B;"> <a id="" style="cursor: pointer;">Information</a></p>
                                                            <div class="overlay6" id="">
                                                                <div class="text"> INFORMATION<br>
                                                                    <font style="font-size:12px;color: #fdfdb1;">View all Services</font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="infoModal" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="padding:15px 50px;"> <button class="close" data-dismiss="modal" type="button">×</button>
                                                                    <h4> Information Services</h4>
                                                                </div>
                                                                <div class="modal-body" style="padding:30px 50px;color:gray;font-size:18px;"> <b>Local Self Governance Department</b><br>
                                                                    <ul>
                                                                        <li>
                                                                            <!--<a href="/web/guest/soochika">--><a class="eform_f" id="Soochika"> Soochika File Tracking</a></li>
                                                                        <li>
                                                                            <!--<a href="/web/guest/pension">--><a class="eform_f" id="PensionSearch"> Sevana Pension</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="modal-footer"> &nbsp;</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        $(".eform_f").on("click", function() {
                                                            $(this).attr("href", "https://Adama.gov.in/web/guest/citizen-eforms?p_p_id=48_INSTANCE_BeymSPFOQ96N&_48_INSTANCE_BeymSPFOQ96N_iframe_eName=" + this.id)
                                                        }); /*]]>*/
                                                    </script>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        $(document).ready(function() {
                                                            $("#infoClick").click(function() {
                                                                $("#infoModal").modal()
                                                            })
                                                        }); /*]]>*/
                                                    </script>
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aui-w25 portlet-column" id="column-8">
                            <div class="portlet-dropzone portlet-column-content" id="layout-column_column-8">
                                <div id="p_p_id_56_INSTANCE_nIjNN8gTBXNK_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_nIjNN8gTBXNK"></span>
                                    <div class="portlet-body">
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_12286780_2.0">
                                                    <p>
                                                        <link href="/documents/10180/e7981763-ba5d-4b88-950e-0018fec0dcfb" rel="stylesheet">
                                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                                        <style type="text/css">
                                                            .modal-body {
                                                                font-size: 16px;
                                                            }

                                                            .modal-body ul li {
                                                                list-style-type: disc;
                                                                margin-left: 5%;
                                                                font-size: 16px;
                                                                line-height: 1.5;
                                                            }

                                                            .modal-header,
                                                            h4,
                                                            .close {
                                                                background-color: #145c97;
                                                                color: white !important;
                                                                text-align: center;
                                                                font-size: 30px;
                                                            }

                                                            .modal-footer {
                                                                background-color: #f9f9f9;
                                                            }

                                                            .h1,
                                                            .h2,
                                                            .h3,
                                                            h1,
                                                            h2,
                                                            h3 {
                                                                margin-top: 0;
                                                                margin-bottom: 0;
                                                            }

                                                            .h4 {
                                                                font-size: 18px;
                                                            }
                                                        </style>
                                                        <style type="text/css">
                                                            .TS {
                                                                border: 2px solid white;
                                                                width: 100%;
                                                                background-color: #fff;
                                                                position: relative;
                                                            }

                                                            .TSimg {
                                                                border-bottom: 2px solid #aa6282;
                                                                width: 100%;
                                                            }

                                                            .TS:hover {
                                                                border: 2px solid #790434;
                                                            }

                                                            .cnt5 {
                                                                position: relative;
                                                            }

                                                            .image {
                                                                display: block;
                                                                width: 100%;
                                                                height: auto;
                                                            }

                                                            .overlay5 {
                                                                position: absolute;
                                                                bottom: 0;
                                                                left: 0;
                                                                right: 0;
                                                                background-color: rgba(123, 58, 85, 0.8);
                                                                overflow: hidden;
                                                                width: 100%;
                                                                height: 0;
                                                                transition: .5s ease;
                                                            }

                                                            .cnt5:hover .overlay5 {
                                                                height: 100%;
                                                            }

                                                            .text {
                                                                white-space: nowrap;
                                                                color: white;
                                                                text-align: center;
                                                                font-size: 18px;
                                                                position: absolute;
                                                                overflow: hidden;
                                                                top: 50%;
                                                                left: 50%;
                                                                transform: translate(-50%, -50%);
                                                                -ms-transform: translate(-50%, -50%);
                                                            }
                                                        </style>
                                                    </p>
                                                    <div class="modalDiv">
                                                        <div class="TS cnt5" id="" onclick="" onmouseover="" style="cursor: pointer;">
                                                            <img class="TSimg" src="<?php echo base_url('assets/adama_img/e_services/tax.png') ?>"><br> <br>
                                                            <p style="text-align:center;font-weight:bold;color: #607D8B;"> <a id="" style="cursor: pointer;">Tax Payments</a></p>
                                                            <div class="overlay5" id="">
                                                                <div class="text"> TAX PAYMENTS<br>
                                                                    <font style="font-size:12px;color: #fdfdb1;">View all Services</font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aui-w25 portlet-column" id="column-9">
                            <div class="portlet-dropzone portlet-column-content" id="layout-column_column-9">
                                <div id="p_p_id_56_INSTANCE_6CmqMIml8p8d_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_6CmqMIml8p8d"></span>
                                    <div class="portlet-body">
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_12287074_3.8">
                                                    <p>
                                                        <link href="/documents/10180/e7981763-ba5d-4b88-950e-0018fec0dcfb" rel="stylesheet">
                                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                                        <style type="text/css">
                                                            .modal-body {
                                                                font-size: 16px;
                                                            }

                                                            .modal-body ul li {
                                                                list-style-type: disc;
                                                                margin-left: 5%;
                                                                font-size: 16px;
                                                                line-height: 1.5;
                                                            }

                                                            .modal-header,
                                                            h4,
                                                            .close {
                                                                background-color: #145c97;
                                                                color: white !important;
                                                                text-align: center;
                                                                font-size: 30px;
                                                            }

                                                            .modal-footer {
                                                                background-color: #f9f9f9;
                                                            }

                                                            .h1,
                                                            .h2,
                                                            .h3,
                                                            h1,
                                                            h2,
                                                            h3 {
                                                                margin-top: 0;
                                                                margin-bottom: 0;
                                                            }

                                                            .h4 {
                                                                font-size: 18px;
                                                            }
                                                        </style>
                                                        <style type="text/css">
                                                            .RS {
                                                                width: 100%;
                                                                border: 2px solid white;
                                                                background-color: #fff;
                                                                position: relative;
                                                            }

                                                            .RSimg {
                                                                width: 100%;
                                                            }

                                                            .RS:hover {
                                                                border: 2px solid #5d4b02;
                                                            }

                                                            .cnt7 {
                                                                position: relative;
                                                            }

                                                            .image {
                                                                display: block;
                                                                width: 100%;
                                                                height: auto;
                                                            }

                                                            .overlay7 {
                                                                position: absolute;
                                                                bottom: 0;
                                                                left: 0;
                                                                right: 0;
                                                                background-color: rgba(117, 95, 3, 0.8);
                                                                overflow: hidden;
                                                                width: 100%;
                                                                height: 0;
                                                                transition: .5s ease;
                                                            }

                                                            .cnt7:hover .overlay7 {
                                                                height: 100%;
                                                            }

                                                            .text {
                                                                white-space: nowrap;
                                                                color: white;
                                                                text-align: center;
                                                                font-size: 18px;
                                                                position: absolute;
                                                                overflow: hidden;
                                                                top: 50%;
                                                                left: 50%;
                                                                transform: translate(-50%, -50%);
                                                                -ms-transform: translate(-50%, -50%);
                                                            }
                                                        </style>
                                                    </p>
                                                    <div class="modalDiv">
                                                        <div class="RS cnt7" id="regClick" onclick="" onmouseover="" style="cursor: pointer;">
                                                            <img class="RSimg" src="<?php echo base_url('assets/adama_img/e_services/registration.png') ?>"><br> <br>
                                                            <p style="text-align:center;font-weight:bold;color: #607D8B;"> <a id="" style="cursor: pointer;">Registration/Renewal</a></p>
                                                            <div class="overlay7" id="">
                                                                <div class="text"> REGISTRATION/RENEWAL<br>
                                                                    <font style="font-size:12px;color: #fdfdb1;">View all Services</font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="regModal" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="padding:15px 50px;"> <button class="close" data-dismiss="modal" type="button">×</button>
                                                                    <h4> Registration/Renewal Services</h4>
                                                                </div>
                                                                <div class="modal-body" style="padding:30px 50px;color:gray;font-size:18px;">
                                                                    <!-- <b>Registration Department</b><br /> <ul> <li> <a class="eform" id="Registration BeforeMarriage">Before Marriage Registration</a></li> <li> <a class="eform" id="Registration AfterMarriage">After Marriage Registration</a></li> </ul> <br /> <br /> --><b>Rural Development</b><br>
                                                                    <ul>
                                                                        <li> <a class="eform" id="RD_IAY">Indira Awaas Yojana(IAY) Application</a></li>
                                                                        <li> <a class="eform" id="RD_NREGAJobApplication">NREGA Application</a></li>
                                                                    </ul> <br> <br> <b>Adama Water Authority</b><br>
                                                                    <ul>
                                                                        <li> <a class="eform" id="KWANewWaterConnection">New Water Connection Application</a></li>
                                                                    </ul> <br> <br> <b>eDistrict</b><br>
                                                                    <ul>
                                                                        <li> <a class="eform" id="eDistrict_Profile">eDistrict Registration</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="modal-footer"> &nbsp;</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="Post" name="serviceform"> <input id="p_p_id" name="p_p_id" type="hidden"><br> <input id="iframe_eName" name="iframe_eName" type="hidden"></form>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        $(".eform").on("click", function() {
                                                            if ((Liferay.ThemeDisplay.isSignedIn())) {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms";
                                                                document.getElementById("p_p_id").value = "48_INSTANCE_pSkQDRbUqsW4";
                                                                document.getElementById("iframe_eName").value = this.id;
                                                                document.forms.serviceform.submit()
                                                            } else {
                                                                document.forms.serviceform.action = "https://Adama.gov.in/web/guest/citizen-eforms?S_id=" + this.id;
                                                                document.forms.serviceform.submit()
                                                            }
                                                        }); /*]]>*/
                                                    </script>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        $(document).ready(function() {
                                                            $("#regClick").click(function() {
                                                                $("#regModal").modal()
                                                            })
                                                        }); /*]]>*/
                                                    </script>
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aui-w25 portlet-column portlet-column-last" id="column-10">
                            <div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column_column-10">
                                <div id="p_p_id_56_INSTANCE_I4FHE5fmuWEQ_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_I4FHE5fmuWEQ"></span>
                                    <div class="portlet-body">
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_12298445_8.7">
                                                    <link href="/documents/10180/2901a8d0-5b1c-45e8-8101-466db7f35e3e" rel="stylesheet">
                                                    <style type="text/css">
                                                        .BG {
                                                            width: 100%;
                                                            border: 2px solid #5f6903;
                                                            background-color: #fff;
                                                            position: relative;
                                                            text-align: center;
                                                        }

                                                        .BGimg {
                                                            width: 100%;
                                                        }

                                                        .image {
                                                            display: block;
                                                            width: 100%;
                                                            height: auto;
                                                        }

                                                        .odometer {
                                                            font-size: 20px;
                                                            text-align: center;
                                                        }
                                                    </style>
                                                    <div class="BG" id="bg">
                                                        <img class="BGimg" src="<?php echo base_url('assets/adama_img/e_services/green radial bg.png') ?>">
                                                        <div id="countDiv" style="position:absolute;z-index:9;bottom:40%;text-align:center;width:100%;">
                                                            <p style="text-align:center;font-weight:bold;color: #6a7702;margin-bottom:2%;font-size:16px;"> Transaction Count</p>
                                                            <div align="center" class="odometer odometer-auto-theme" id="odometer" style="transform: scale(1.2); transition: all 0.5s ease 0s;">
                                                                <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script src="/documents/10180/fc9a439d-5234-4a7a-acad-ed01941c3575"></script>
                                                    <script>
                                                        /*<![CDATA[*/
                                                        var res;
                                                        $(document).ready(function() {
                                                            $("#bg").hover(function() {
                                                                $("#odometer").css("transform", "scale(1.25)");
                                                                $("#odometer").css("transition", "all 0.50s")
                                                            }, function() {
                                                                $("#odometer").css("transform", "scale(1.2)");
                                                                $("#odometer").css("transition", "all 0.50s")
                                                            });

                                                            function c(e, f) {
                                                                var d = e + ":" + f;
                                                                var g = btoa(d);
                                                                return "Basic " + g
                                                            }
                                                            var a = "mobile_auth";
                                                            var b = "%;tp!+'aq92@";
                                                            $.ajax({
                                                                url: "/UserService/fetchTransactionCount.htm",
                                                                data: {
                                                                    xmlString: "<data></data>"
                                                                },
                                                                type: "POST",
                                                                contentType: "application/x-www-form-urlencoded",
                                                                dataType: "xml",
                                                                beforeSend: function(d) {
                                                                    d.setRequestHeader("Authorization", c(a, b))
                                                                },
                                                                success: function(d) {
                                                                    res = $(d).find("value").text();
                                                                    setTimeout(function() {
                                                                        odometer.innerHTML = res
                                                                    }, 1500)
                                                                }
                                                            })
                                                        }); /*]]>*/
                                                    </script>
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-layout">
                        <div class="aui-w100 portlet-column portlet-column-only" id="column-11">
                            <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-11">
                                <div id="p_p_id_56_INSTANCE_kOnQoxFLhKS0_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-journal-content "> <span id="p_56_INSTANCE_kOnQoxFLhKS0"></span>
                                    <div class="portlet-body">
                                        <section class="portlet" id="portlet_56_INSTANCE_kOnQoxFLhKS0">
                                            <header class="portlet-topper">
                                                <h2 class="portlet-title"> <span class="portlet-title-text" tabindex="0">Frequently Asked Questions (FAQ)</span> </h2>
                                                <ul class="portlet-topper-toolbar" id="portlet-topper-toolbar_56_INSTANCE_kOnQoxFLhKS0" type="toolbar"> </ul>
                                            </header>
                                            <div class="portlet-content">
                                                <div class=" portlet-content-container" style="">
                                                    <div class="portlet-body">
                                                        <div class="journal-content-article" id="article_10154_10180_12287136_2.8">
                                                            <style type="text/css">
                                                                .button2 {
                                                                    background-color: #4CAF50;
                                                                    border: none;
                                                                    color: white;
                                                                    float: left;
                                                                    padding: 1% 10%;
                                                                    text-align: center;
                                                                    text-decoration: none;
                                                                    display: inline-block;
                                                                    font-size: 16px;
                                                                    text-shadow: none;
                                                                    margin: 4px 2px;
                                                                    cursor: pointer;
                                                                    -webkit-transition-duration: .4s;
                                                                    transition-duration: .4s;
                                                                }

                                                                .button2:hover {
                                                                    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
                                                                    background-color: #4CAF50;
                                                                    border: none;
                                                                    color: white;
                                                                    float: left;
                                                                    padding: 1% 10%;
                                                                    text-align: center;
                                                                    text-decoration: none;
                                                                    display: inline-block;
                                                                    font-size: 16px;
                                                                    text-shadow: none;
                                                                    margin: 4px 2px;
                                                                }
                                                            </style>
                                                            <div class="aligndiv">
                                                                <div style="text-align: justify;margin-bottom:3px;"> <strong>Q :&nbsp;How citizen can avail services from this portal?</strong></div>
                                                                <div style="text-align: justify;"> <strong>A :</strong> &nbsp;To avail a service, click on the required service name either by selecting from the department-wise categorization in the right side or by the need-based classification in the right. To access most of the services, a citizen needs to be a registered user. For such services, portal will prompt login if the user is not logged in. </div> <!-- <div> <strong>Q:</strong> How can I check the status of my application?</div> <div> <strong>A:</strong> The status of the application can be checked either through SMS, E-mail or by logging into the portal.</div> <div> &nbsp;</div> <div> <strong>Q:&nbsp;</strong>What are the different modes of payment available?</div> <div> <strong>A:</strong>&nbsp;Payment can be made through Debit card, Credit card or via Net Banking.</div> <div> &nbsp;</div> <div> &nbsp;</div> <form action=""> <input name="AppNumbr" placeholder="Post your question" style="width:75%;border: 1px solid gray;border-radius: 3px;height:30px;" type="text" /> &nbsp;&nbsp; <input style="background: #145c97; color: white; text-shadow: none; height: 25px; border-radius: 0;" type="submit" value="Post" />&nbsp;</form>--> <a button="" class="button2" href="https://Adama.gov.in/faq1">More...</a>
                                                            </div> <br>
                                                        </div>
                                                        <div class="entry-links"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div id="p_p_id_56_INSTANCE_1whEy8Go3mOZ_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_1whEy8Go3mOZ"></span>
                                    <div class="portlet-body">
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <div class="journal-content-article" id="article_10154_10180_12287240_2.0">
                                                    <style type="text/css">
                                                        .slides a {
                                                            margin-left: 1%;
                                                            margin-right: 1%;
                                                        }
                                                    </style>
                                                    <div align="left" class="slides" style="margin-top:2%;margin-bottom:1%;">
                                                        <marquee align="center" behavior="alternate" direction="left" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="3" width="100%"> <a href="https://uidai.gov.in/" target="_blank"><img alt="Aadhaar" src="/documents/10180/e219cf61-aa01-40ce-880d-3a033f7fdbe5" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="Aadhaar"></a> <a href="https://corp.onlinesbi.com/corporate/sbi/corp_sb_collect.html" target="_blank"> <img alt="SBI MOPS" src="/documents/10180/a836de71-b7cf-4756-a0ff-0b026d952209" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="SBI MOPS"></a> <a href="https://www.sbi.co.in/" target="_blank"><img alt="SBI" src="/documents/10180/b93c64dd-099f-47fc-8390-9b1d85a0fda4" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="SBI"></a> <a href="http://paygovindia.gov.in/" target="_blank"> <img alt="PayGov" src="/documents/10180/b2252f5b-3e7d-4f55-9787-5b5c19cf4ac9" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="PayGov"></a> <a href="https://www.billdesk.com/" target="_blank"> <img alt="Bill Desk" src="/documents/10180/c9c3ae29-7720-4432-8240-f25e7692b75e" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="BillDesk"></a> <a href="https://etreasury.Adama.gov.in/" target="_blank"> <img alt="e-Treasury" src="/documents/10180/42060a33-f92d-44af-bb52-087afb51735c" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="e-Treasury"></a> <a href="https://mail.gov.in/iwc_static/c11n/allDomain/layout/login_gov2.jsp?lang=en-GB&amp;3.0.1.2.0_15121607&amp;svcs=abs,im,mail,smime,calendar,c11n" target="_blank"> <img alt="Mail.gov.in" src="/documents/10180/df3ba9fb-f9b4-4f15-a899-9836418e0b86" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="mail.gov.in"></a> <a href="https://www.mgov.gov.in/" target="_blank"> <img alt="Mobile Seva" src="/documents/10180/eaa60db6-5e2f-4273-9750-100f28de8a48" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="Mobile Seva"></a> <a href="https://edistrict.Adama.gov.in/" target="_blank"> <img alt="e-District" src="/documents/10180/3ad37936-3307-4fcb-82a4-6c60db6b5a43" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="e-District"></a> <a href="http://www.stqc.gov.in/" target="_blank"> <img alt="STQC" src="/documents/10180/7a3aa259-fd71-4926-8df0-4d69621369cd" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="STQC"></a> <a href="http://www.cert-in.org.in/" target="_blank"> <img alt="CERT" src="/documents/10180/ea931149-4962-4c31-b29b-074e766c1788" style="width:130px;height:40px;border:2px solid #ddd;border-radius:5px;" title="CERT"></a> </marquee>
                                                    </div>
                                                </div>
                                                <div class="entry-links"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
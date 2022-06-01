<?php
//echo "<pre>";print_r($data);die;
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
#$title = "PDF Report";
#$obj_pdf->SetTitle($title);
#$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
#$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
#$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
#$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
#$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
#$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
#$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
#$obj_pdf->SetFont('helvetica', '', 9);
#$obj_pdf->setFontSubsetting(false);
$obj_pdf->SetPrintHeader(false);
$obj_pdf->SetPrintFooter(false);
$obj_pdf->AddPage();
$background = base_url('./assets/images/student/result/background.png');
$obj_pdf->SetAlpha(0.1);
$obj_pdf->Image($background, 40, 90, 130, 130, 'PNG', '', '', true, 200, '', false, false, 0, false, false, true);
$obj_pdf->SetAlpha(1);
ob_start();
// we can have any view part here like HTML, PHP etc

$stamp1 = base_url('./assets/images/student/result/stamp1.png');
$stamp2 = base_url('./assets/images/student/result/stamp2.png');
$stamp3 = base_url('./assets/images/student/result/stamp3.png');
$original = base_url('./assets/images/student/result/original.png');
$studentPhoto = base_url('./assets/images/student/'.$data['studentPhoto']);

$content = <<<EOD
<table>
    <tbody style="background-color: hsl(50deg 8% 86%);">
    <tr>
        <td>
            <table>
                <tbody style="display:block;width:100%">
                    <tr style="display:block;width:100%;">
                        <td style="width:100%;padding:0;text-align:center;border:none;vertical-align:top">
                            <div style="display:inline-block;padding:5px;margin:4px auto;width:90%">
                                <span style="color:maroon;display:block;font-size:25px;font-family: auto; font-weight:500;">
                                    Lal Bahadur Shastri Training Campus
                                </span>
                                <br><br>
                                <span style="color:darkblue;display:block;font-size:12px;font-family: initial; font-weight:600;">
                                    NAI DISHA JAN KALYAN TRUST
                                </span>
                                <br>
                                <span style="color:darkblue;display:block;font-size:10px;font-family: initial; font-weight:600;">
                                    Regd. by govt. of NCT of New Delhi, Regn. No.1053 
                                </span>
                                <br>
                                <span style="color:#fff; background-color: maroon; font-size:14px; font-family: initial; font-weight:600;">
                                An ISO 9001:2008 Certified
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table border="0" cellpadding="5">
                                <tr>
                                    <td style="text-align: left;">
                                        <img src="{$stamp1}" style="width: 85px" >
                                    </td>
                                    <td style="text-align: right;">
                                        <img src="{$studentPhoto}" style="width: 85px" >
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <table border="0" >
                                <tr>
                                    <td width="35%"></td>
                                    <td width="30%" style="display:block; border: 1px solid #000; color:#0c172f;font-size:10px; font-weight:bold;" >ADMIT CARD / HALL TICKET</td>
                                    <td width="35%"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:inline-block;width:100%;padding:0;text-align:center;border:none;vertical-align:top">
                            <span style="color:#0c172f;display:block;font-size:10px;letter-spacing: 1PX; font-weight:600;line-height:130%">
                                EXAMINATION {$data['examination_year']}
							</span>
							<br><br>
							<table width="100%" style="color:#0c172f; font-size: 10px;">
							    <tr>
                                    <td align="left" width="25%">
                                        Name:
                                    </td>
                                    <td align="left" width="48%">
                                        {$data['student_name']}
                                    </td>
                                    <td align="right" width="7%">
                                        Roll:
                                    </td>
                                    <td align="left" width="20%">
                                        {$data['roll_number']}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        Father's Name:
                                    </td>
                                    <td align="left">
                                        {$data['father_name']}
                                    </td>
                                    <td align="right">
                                        
                                    </td>
                                    <td align="left">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        Centre Name:
                                    </td>
                                    <td align="left">
                                        {$data['center_name']}
                                    </td>
                                    <td align="right">
                                        
                                    </td>
                                    <td align="left">
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: center; color:#0c172f;display:block;font-size:10px;letter-spacing: 1PX; font-weight:600;">
                                {$data['course_name']}
                            </div>
                        </td>
                    </tr>
                    <tr>    
                        <td style="display:inline-block;width:100%;padding:0;text-align:center;border:none;vertical-align:top">
                            <br><br>
                            <table align="center" border="1" bottom="0" cellpadding="5" cellspacing="0" style="font-family:Tahoma, Geneva, sans-serif; color:#0e0e0e; border-collapse:collapse; font-size: 9px; text-align: center; width: 100%;" top="0">
                                <thead>
                                  <tr>
                                    <th style="padding: 10px;">CODE</th>
                                    <th style="padding: 10px;">SUBJECT</th>
                                    <th style="padding: 10px;">DATE &<br> DAY</th>
                                    <th style="padding: 10px;">TIMING</th>
                                    <th style="padding: 10px;">INVIGILATOR'S SIGNATURE</th>
                                  </tr>
                                </thead>
                                <tbody>
EOD;

foreach ($data['subject_code'] as $key=>$val) {
$content .= <<<EOD
              <tr>
                <td style="padding: 10px;">{$data['subject_code'][$key]}</td>
                <td style="padding: 20px; text-align: left;">{$data['subject_name'][$key]}</td>
                <td style="padding: 10px;">{$data['date'][$key]}</td>
                <td style="padding: 10px;" >{$data['time'][$key]}</td>
              </tr>
EOD;

}


$content .= <<<EOD
                               </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br>
                            <table border="0" cellpadding="0">
                                <tr>
                                    <td style="vertical-align: bottom">
                                        
                                    </td>
                                    <td style="vertical-align: bottom; width: 100px" >
                                        
                                    </td>
                                    <td style="text-align: center; vertical-align: bottom; width: 195px" >
                                        
                                    </td>
                                    <td style="text-align: center; vertical-align: bottom; width: 100px" >
                                        <br><br>
                                        <img src="{$stamp2}" >
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;" >
                                        <table cellpadding="5"><tr><td><div style="font-size: 10px; font-weight: bold; border-top: 1px solid maroon; margin: 0 5px; ">
                                        Candidiate's Sign.</div></td></tr></table>
                                    </td>
                                    <td style="text-align: center;" >
                                        <table cellpadding="5"><tr><td><div style="font-size: 10px; font-weight: bold; border-top: 1px solid maroon; margin: 0 5px; ">Controller (Exam)</div></td></tr></table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
<span style="color:#0c172f;display:block;font-size:8px; text-align: left; letter-spacing: 1PX; font-weight:600;line-height:130%;">
    <span style="color:#0c172f; text-align: left;">
        <span>IMPORTANT NOTE:</span>
        <ol>
            <li style="text-align: justify;">
                Admit Card along with Photo Identity proof should be carried to the Test Centre at the time of the test.
            </li>
            <li style="text-align: justify;">
                Please ensure that your latest passport size, colour photograph is pasted on the Admit Card at the place provided for before appearing for the test (Your photograph should not be more than 3 months old).
            </li>
            <li style="text-align: justify;">
                An authorized person will verify and authenticate your Admit Card against the photo-id on the day of the test.
            </li>
            <li style="text-align: justify;">
                Candidates should note that an authenticated Admit Card is an important document without which the candidate will not be permitted to appear for the examination.
            </li>
            <li style="text-align: justify;">
                Cell phones, calculators, watch calculators, alarm clocks, digital watches with built in calculators/ memory or any electronic or smart devices are not be allowed in the test hall.
            </li>
        </ol>
    </span>
</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
EOD;

ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
#$obj_pdf->Output('output.pdf', 'I');
$obj_pdf->Output(strtolower(str_replace(" ","-",$data['student_name']))."-".time().'-admit-card.pdf', 'D');
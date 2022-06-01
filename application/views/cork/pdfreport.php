<?php
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
                                <span style="color:maroon;display:block;font-size:26px;font-family: auto; font-weight:500;">
                                    Lal Bahadur Shastri Training Campus
                                </span>
                                <br><br>
                                <span style="color:darkblue;display:block;font-size:13px;font-family: initial; font-weight:600;">
                                    NAI DISHA JAN KALYAN TRUST
                                </span>
                                <br>
                                <span style="color:darkblue;display:block;font-size:11px;font-family: initial; font-weight:600;">
                                    Regd. by govt. of NCT of New Delhi, Regn. No.1053 
                                </span>
                                <br>
                                <span style="color:#fff; background-color: maroon; font-size:15px; font-family: initial; font-weight:600;">
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
                        <td style="display:inline-block;width:100%;padding:0;text-align:center;border:none;vertical-align:top">
                            <span style="color:#0c172f;display:block;font-size:11px;letter-spacing: 1PX; font-weight:600;">
                                {$data['course_name']}
                            </span>
                            <br>
                            <span style="color:#0c172f;display:block;font-size:11px;letter-spacing: 1PX; font-weight:600;line-height:130%">
                                EXAMINATION {$data['examination_year']}
							</span>
							<br><br><br>
							<table width="100%" style="color:#0c172f">
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
                                        Mother's Name
                                    </td>
                                    <td align="left">
                                        {$data['mother_name']}
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
                        <td style="display:inline-block;width:100%;padding:0;text-align:center;border:none;vertical-align:top">
                            <br><br>
                            <table align="center" border="1" bottom="0" cellpadding="5" cellspacing="0" style="font-family:Tahoma, Geneva, sans-serif; color:#0e0e0e; border-collapse:collapse; font-size: 11px; text-align: center; width: 100%;" top="0">
                                <thead>
                                  <tr>
                                    <th rowspan="2" style="padding: 10px;">CODE</th>
                                    <th rowspan="2" style="padding: 10px;">SUBJECT</th>
                                    <th rowspan="2" style="padding: 10px;">MAX. <br> MARKS</th>
                                    <th rowspan="2" style="padding: 10px;">MIN.<br> MARKS</th>
                                    <th colspan="2" style="padding: 10px;">MARKS OBT.</th>
                                    <th rowspan="2" style="padding: 10px;">TOTAL</th>
                                  </tr>
                                    <tr>
                                        <th style="padding: 10px;">THEORY <br> (75) </th><th style="padding: 10px;">PRAC. <br> (25) </th>
                                    </tr>
                                </thead>
                                <tbody>
EOD;
$i=0;
foreach ($data['subject_code'] as $key=>$val) {
    $i++;
$content .= <<<EOD
              <tr>
               <td style="padding: 10px;">C 0{$i} </td>
               <!-- <td style="padding: 10px;">{$data['subject_code'][$key]}</td> -->
                <td style="padding: 20px; text-align: left;">{$data['subject_name'][$key]}</td>
                <td style="padding: 10px;">{$data['max_number'][$key]}</td>
                <td style="padding: 10px;">{$data['min_number'][$key]}</td>
                <td style="padding: 10px;">{$data['marks_obtain_theory'][$key]}</td>
                <td style="padding: 10px;">{$data['marks_obtain_practical'][$key]}</td>
                <td style="padding: 10px;">{$data['marks_obtain_total'][$key]}</td>
              </tr>
EOD;
$totalMaxNumber += $data['max_number'][$key];
$totalMinNumber += $data['min_number'][$key];
$totalMarksObtainTheory += $data['marks_obtain_theory'][$key];
$totalMarksObtainPractical += $data['marks_obtain_practical'][$key];
$totalMarksObtainTotal += $data['marks_obtain_total'][$key];
}
$obtainPercentage  = round((($totalMarksObtainTotal * 100) / $totalMaxNumber), 2);

$content .= <<<EOD
              <tr>
                <td style="padding: 10px;"></td>
                <td style="padding: 20px;">TOTAL</td>
                <td style="padding: 10px;">{$totalMaxNumber}</td>
                <td style="padding: 10px;">{$totalMinNumber}</td>
                <td style="padding: 10px;">{$totalMarksObtainTheory}</td>
                <td style="padding: 10px;">{$totalMarksObtainPractical}</td>
                <td style="padding: 10px;">{$totalMarksObtainTotal}</td>
              </tr>
EOD;

$obtainPercentageInWords = ucwords($data['controller']->getPercentInWord($obtainPercentage));
$grade = strtoupper(($totalMarksObtainTotal>=60) ? "First" : (($totalMarksObtainTotal>=45) ? "Second" : (($totalMarksObtainTotal>=33) ? "Third" : "Fail")));
$isPass = ($totalMarksObtainTotal >= $totalMinNumber) ? "PASS" : "FAIL";

$content .= <<<EOD
                               </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br>
                            <table border="0" width="100%" style="color:#0c172f; font-size: 11px;">
							    <tr>
                                    <td align="left" width="25%">
                                        IN WORDS:
                                    </td>
                                    <td align="left" width="40%">
                                        {$obtainPercentageInWords}
                                    </td>
                                    <td align="right" width="15%">
                                        RESULT:
                                    </td>
                                    <td align="left" width="20%">
                                        {$isPass}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        PERCENTAGE:
                                    </td>
                                    <td align="left">
                                        {$obtainPercentage}%
                                    </td>
                                    <td align="right">
                                        DIVISION:
                                    </td>
                                    <td align="left">
                                        {$grade}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        DATE:
                                    </td>
                                    <td align="left">
                                        {$data['date']}
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
                            <br><br>
                            <table border="0" cellpadding="0">
                                <!--<tr>
                                    <td style="vertical-align: bottom">
                                        <br><br><br>
                                        <img src="{$stamp1}" style="width: 85px" >
                                    </td>
                                    <td style="vertical-align: bottom; width: 66px" >
                                        <br><br><br><br>
                                        <img src="{$original}" >
                                    </td>
                                    <td style="text-align: center; vertical-align: bottom; width: 100px" >
                                        <br><br>
                                        <img src="{$stamp2}" >
                                    </td>
                                    <td style="text-align: center; vertical-align: bottom; width: 200px" >
                                        <img src="{$stamp3}" >
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;" >
                                        <table cellpadding="5"><tr><td><div style="font-size: 11px; font-weight: bold; border-top: 1px solid maroon; margin: 0 5px; ">Checked By</div></td></tr></table>
                                    </td>
                                    <td style="text-align: center;" >
                                        <table cellpadding="5"><tr><td><div style="font-size: 11px; font-weight: bold; border-top: 1px solid maroon; margin: 0 5px; ">Controller (Exam)</div></td></tr></table>
                                    </td>
                                </tr>-->
                            </table>
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
$obj_pdf->Output(strtolower(str_replace(" ","-",$data['student_name']))."-".time().'-result.pdf', 'D');
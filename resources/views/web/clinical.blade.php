@extends('layouts.web')

@section('content')
<div data-spy="scroll" data-target="#navbar">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clinical-text">
                        <h1>IMPROVING</h1>
                        <p>THE STANDARD OF CARE IN CRITICAL CONDITIONS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>CLINICAL VALUE OF HUMAN ALBUMIN</p>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="clinical area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline">
                        <h2>Albumin Has a High Clinical Value</h2>
                        <h3>in a Variety of Conditions<span>1-3</span></h3>
                        <p>The safety and effect of Human Albumin on improved outcomes in a variety of pathological conditions have been demonstrated in</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well-left">
                        <div class="single-well">
                            <img src="{{asset('img/high-clinical-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr class="tr">
                                    <td class="th">Clinical Setting</td>
                                    <td class="th">Trials(n)</td>
                                    <td class="th">Patients(n)</td>
                                    <td class="th">Range</td>
                                    <td class="th">Study Findings</td>
                                </tr>

                                <tr class="tr">
                                    <td class="td">Cardiac surgery<sup>18</sup></td>
                                    <td class="td">31</td>
                                    <td class="td">1559</td>
                                    <td class="td">14-105</td>
                                    <td class="td">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Amount of fluid in the peri-and post-operative period</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Shunt
                                        </li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Extravascular water</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> pressure gradient between COP,PCPW</li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Ascites<sup>18</sup></td>
                                    <td class="td">10</td>
                                    <td class="td">942</td>
                                    <td class="td">18-289</td>
                                    <td class="td">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Complications and activation of the renin-angiotensin system during paracentesis</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Hemodynamics post-paracentesis</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Hospital stays/costs</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Mortlity (combined with cefotaxime) in patients with spontaneous bacterial peritonitis</li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Sepsis<sup>18</sup></td>
                                    <td class="td">4</td>
                                    <td class="td">104</td>
                                    <td class="td">12-46</td>
                                    <td class="td">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Pulmonary edema</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Blood coagulopathy</li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Burns<sup>18</sup></td>
                                    <td class="td">4</td>
                                    <td class="td">197</td>
                                    <td class="td">19-79</td>
                                    <td class="td">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Complications
                                        </li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Central nervous system<sup>18</sup></td>
                                    <td class="td">4</td>
                                    <td class="td">418</td>
                                    <td class="td">18-300</td>
                                    <td class="td">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i>Disability and cerebral edema in neonates with hypoxic-ischemic injury. Need for caution in patients with trauma and associated chronic hypertension</li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Stroke<sup>18</sup></td>
                                    <td class="td">2</td>
                                    <td class="td">453</td>
                                    <td class="td">49-434</td>
                                    <td class="td">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> mNIHSS scores</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> DWI Lesion volume increasa</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Patent/recanalized vessels associated with more significant improvement</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Equivalent death rate > 30 days with saline; higher risk > 30 days in patients > 83 (ALIAS pilot study)</li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>COP = colloid osmotic pressure; PCWP = pulmonary capillary wedge pressure; mNIHSS = modified National Institutes of Health Stroke Scale; DWI = diffusion weighted image</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="section-headline">
                        <h5>Albumin Provides an Equivalent Safety Profile to Saline<span>1</span></h5>
                        <p>All-cause mortality rates at the 28-day evaluation period</p>
                        <img src="{{asset('img/clinical-3.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="section-headline">
                        <h5>Albumin Displays a More Favorable Safety Profile  Than Hydroxyethyl Starch (HES) Preparations<span>2,4</span></h5>
                    </div>
                    <div class="circle">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>A systematic review of colloid data published between 1944 and 2002 found that albumin displayed more safety profile than HES.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{asset('img/circle-2.png')}}">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{asset('img/circle-1.png')}}">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>This was backed up by a later systematic review of colloid data published between 2002 and 2010.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <p>USES OF HUMAN ALBUMIN 1. SEPSIS</p>
        </div>
    </div>
    <div id="about" class="area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline">
                        <h2>Sepsis and Associated Conditions Including:</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="associated">
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <img src="{{asset('img/spasi-condition.png')}}">
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="testimonials">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting dummy text of the printing and typesetting dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reduced-mortality-risk">
                <div class="section-headline">
                    <h5>Reduced Mortality Risk with Albumin Resuscitation in Sepsis 6 Compared to Saline</h5>
                    <p>Mortality rate among patients with severe sepsis in a subgroup analysis of the SAFE study<sup>*6</sup></p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('img/second-graph.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        <div class="reduced-mortality">
                            <p>*The Saline versus Albumin Fluid Evaluation (SAFE) Study was a blinded, randomized controlled trial to compare the effect of fluid resuscitation with albumin or saline on mortality in a heterogeneous population of patients in the ICU. A subgroup analiysis of patients with severe sepsis at the time of andominzation is presented.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="strip">
            <div class="container">
                <p>USES OF HUMAN ALBUMIN 2. LIVER DISEASE</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="advanced-cirrhosis">
                    <div class="col-md-8">
                        <div class="col-md-5">
                            <div class="circle"><span>Liver dysfunction</span></div>
                        </div>
                        <div class="col-md-2">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="col-md-5">
                            <div class="circle"><span>Dilution of albumin content in the extracellular space*</span></div>
                        </div>
                        <div class="col-md-12 cirrhosis-circle">
                            <div class="circle-2">
                                <span>Hypovolemin, & HypoalbuminemiaIf left untreated,hypovolemia willexacerbateleading to:</span>
                                <img src="{{asset('img/dotted.png')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="circle-2"><span>Ascites</span></div>
                        </div>
                        <div class="col-md-4">
                            <div class="circle-2"><span>Hepatorena lsyndrome with spontaneous bacterial peritonitis</span></div>
                        </div>
                        <div class="col-md-4">
                            <div class="circle-2"><span>Post paracentesis circulatory dysfunction (PCD)</span></div>
                        </div>
                    </div>
                    <div class="col-md-4 testimonials-details">
                        <div class="cirrhosis-testimonials">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p>MAIN GOAL8 Preservation of central blood volume through fluid resuscitation</p>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-headline">
                <h5>Albumin Reduces Morbidity in LVP*</h5>
                <p>Compared with Alternative Treatments<sup>**9</sup></p>
            </div>
            <div class="row">
                <div class="col-md-6">
                   <div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
			  <th>Morbidity </th>
			  <th>Odds Ratio (95% CI)</th>                                          
			</tr>
		</thead>   
		<tbody>
			<tr>
				<td>Ascites recurrence</td>
				<td>0.85 (0.61 -1 .18)</td>                          
			</tr>
			<tr>
				<td>Renal impairment </td>
				<td>0.83 (0.49-1.42) </td>                          
			</tr>
			<tr>
				<td>Hepatic encephalopathy </td>
				<td>0.91 (0.50-1.66) </td>                          
			</tr>
			<tr>
				<td>Portal hypertensive bleeding</td>
				<td>0.97 (0.45-2.11) </td>                          
			</tr>
			<tr>
				<td>Hospital readmission </td>
				<td>0.81 (0.561.18) </td>                          
			</tr>
		</tbody>
	</table>
</div>
                    <p>In a meta-analysis of prospective studies of albumin therapy in LVP. albumin treatment was associated with 1 5-19% reductions in the odds of particular morbidity endpoints, compared with control treatments. 'LVP: patients undergoing large-volume paracentesis; "Alternative treatments investigated in the meta-analysis were dextran, gelatin, HES, and hypertonic saline. </p>
                </div>
                <div class="col-md-6">
                    <p>Mortality rates across 1 1 trials with mortality data comparing albumin with alternative treatments9 </p>
                    <img src="{{asset('img/second-graph.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <p>USES OF HUMAN ALBUMIN 3. CARDIAC SURGERY</p>
        </div>
    </div>
    <div class="area-padding">
        <div class="container">
            <div class="section-headline">
                <h2>Sepsis and Associated Conditions Including:</h2>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="enhance-img">
                        <img src="{{asset('img/all-circle.jpg')}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="enhance-text">
                        <h3>Lack of Serum Albumin10</h3>
                        <p>- Mortality after coronary artery bypass surgery </p>
                        <p>- Risk of early reoperation</p>
                        <p>- Post-operative renal failure </p>

                        <p>- Prolonged ventilator support </p>
                        <p>- ICU stay </p>
                        <p>- Total length of hospital stay Ascites recurrence</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('img/drop-img.jpg')}}">
                </div>
            </div>
            <div class="section-headline">
                <h5>Albumin Reduces Mortality Odds by 25%</h5>
                <p>Compared with Non-protein Colloid Use<sup>10</sup></p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="surgery-graph-img">
                        <img src="{{asset('img/third-graph.jpg')}}">
                        <h4>Albumin Displays a More Favorable Safety Profile</h4>
                        <p>than Hydroxyethyl Starch (HES), in Cardiac Surgeries10</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>In a retrospective review of discharge data on 19,578 patients undergoing coronary artery bypass graft (CABG) surgery at 298 US hospitals, albumin and non-protein colloids as volume expanders after CABG surgery were compared.10
                    </p>
                    <p class="lowerOdd">
                        In the multivariable logistic regression analysis, albumin use was associated with <span> 25%  lower  odds of mortality </span> compared to non-protein colloid use (odds ratio, 0.80; 95% confidence interval, 0.67 to 0.96).10
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <p>USES OF HUMAN ALBUMIN 4. GENERAL SURGERY</p>
        </div>
    </div>
    <div class="container">
        <div class="section-headline">
            <h5>Albumin Reduces Mortality Odds by 25%</h5>
            <p>Compared with Non-protein Colloid Use<sup>10</sup></p>
        </div>
        <div class="serum-graph">
            <h4>STABLE SERUM ALBUMIN LEVELS</h4>
            <p><strong>COMPARED TO STARCH SOLUTIONS<sup>13</sup></strong></p>
            <p>Pre- and post-surgical serum albumin concentrations</p>
            <p>Albumin Displays a More Favorable Safety Profile</p>
            <img src="{{asset('img/center-graph.jpg')}}">
            <p>A randomized trial of 40 surgery patients compared pre- and post-surgical serum albumin concentrations in patients treated with starch and albumin.13</p>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <p>USES OF HUMAN ALBUMIN 5. INTENSIVE CARE</p>
        </div>
    </div>
    <div class="table-concentration">
        <div class="container">
            <div class="section-headline">
                <h5>Albumin Is a Rapid Euective Therapy in the Intensive Care<sup>14,15</sup></h5>
                <p><strong>In the intensive care unit<sup>14,15</sup> 5% and 20% albumin solutions are used to:</strong></p>
                <p>-Rapidly restore blood volume. </p>
                <p>-Address hypoalbuminemia (serum albumin concentration ( 34 g/L). </p>
                <p>-Interrupt the pathological processes that lead to multi-organ failure. </p>
                <div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
			  <th>Albumin in the Intensive Careen.<sup>11,12</sup></th>
			  <th>5%</th>
			  <th>20%</th>                                          
			</tr>
		</thead>   
		<tbody>
			<tr>
				<td>Hypovolemia, absence of adequate or excessive hydration	</td>
				<td>X</td>
				<td>X<sup>a</sup></td>                                      
			</tr>
			<tr>
				<td>Hypovolemia (long-standing) with hypoalbuminemia, adequate hydration or edema	</td>
				<td></td>
				<td></td>                                      
			</tr>
			<tr>
				<td>Hypovolemia with significant plasma volume deficits	</td>
				<td>X<sup>B</sup></td>             
				<td>X</td>                                      
			</tr>
			<tr>
				<td>Hypoalbuminemia	</td>
				<td>X</td>             
				<td>X</td>                                      
			</tr>
		</tbody>
	</table>
</div>
                <p><strong>-Dilute 20% albumin with crystalloid solutions;</strong></p>
                <p><strong>prefer to prescribing information for precautions.</strong></p>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <p>USES OF HUMAN ALBUMIN 6. CRITICALLY ILL PATIENTS</p>
        </div>
    </div>
    <div class="table-concentration">
        <div class="container">
            <div class="section-headline">
                <h5>Albumin Is a Rapid Euective Therapy in the Intensive Care<sup>14,15</sup></h5>
                <p><strong>In the intensive care unit<sup>14,15</sup> 5% and 20% albumin solutions are used to:</strong></p>
                <p>-Rapidly restore blood volume. </p>
                <p>-Address hypoalbuminemia (serum albumin concentration ( 34 g/L). </p>
                <p>-Interrupt the pathological processes that lead to multi-organ failure. </p>
                <div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
			  <th>Indication</th>
			  <th>Concentration</th>
			  <th>Fluid regimen</th>                                          
			  <th>Duration</th>                                          
			</tr>
		</thead>   
		<tbody>
			<tr>
				<td>Acute illness. volume replacement	</td>
				<td>5%</td>
				<td>250-500 ml in older children and adults 12</td>                                      
				<td>30 minute intervals if response inadequate 12</td>                                      
			</tr>
			<tr>
				<td>Burns. resuscitation phase after 24 hours</td>
				<td>20%</td>
				<td> 100-200 ml in adults<sup>11</sup> - 2.5 to 5 ml per kg body weight in children<sup>11</sup></td>                                      
				<td>1 5-30 minute intervals until adequate response<sup>11</sup></td>                                      
			</tr>
			<tr>
				<td>Burns, post-resuscitation phase	</td>
				<td>5%, 20%</td>             
				<td>I-2 g/kg/die <sup>16</sup></td>                                      
				<td>Dependent on treatment response<sup>12</sup></td>                                      
			</tr>
			<tr>
				<td>Cardiopulmonary bypass priming</td>
				<td>20%</td>             
				<td>200-400 ml (40-80 g)<sup>17</sup></td>                                      
				<td>Dependent on treatment response<sup>12</sup></td>                                      
			</tr>
			<tr>
				<td>Hypoalbuminemia	</td>
				<td>5%. 20%	</td>             
				<td>	Dose (g) : (2.5 g/dL-actual albumin concentration) x (kg x (0.8))<sup>16</sup></td>                                      
				<td>Daily dose should not exceed 2 g/Kg 12,14</td>                                      
			</tr>
			<tr>
				<td>Large-volume paracentesis</td>
				<td>20%</td>             
				<td>5 g/L of fluid removed <sup>16</sup></td>                                      
				<td>During LVP</td>                                      
			</tr>
			<tr>
				<td>Therapeutic plasmapheresis	</td>
				<td>5%</td>             
				<td>500 mL-1000 ml (25-50 g) <sup>16</sup></td>                                      
				<td>Once</td>                                      
			</tr>
		</tbody>
	</table>
</div>

                <p><small>LVP z lange volume paracentesiS CVP : central vetoes pressure; PAWP pulmonary aaerial w-edge procure; PCWP pukvtonarycapilbry wedge pressure. </small>
                    <p>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <p>SAFETY & QUALITY OF HUMAN ALBUMIN®</p>
        </div>
    </div>
    <div class="table-concentration">
        <div class="container">
            <div class="section-headline">
                <h5>Multiple Safety Manufacturing Steps</h5>
                <p>Before Production <sup>21</sup></p>
                <div class="img-baaner">
                    <img src="{{asset('img/banner-s.jpg')}}">
                </div>
                <div class="section-headline">
                    <h5>In Vitro Studies Demonstrate That the Manufacturing Process  for Human Albumin Provides Significant Viral Reduction<sup>11</sup></h5>
                </div>
            </div>
            <div class="row">
                <div class="viral-reduction">
                    <div class="col-md-8">
                        <img src="{{asset('img/table-imgs.jpg')}}">
                    </div>
                    <div class="col-md-4">
                        <p>N/D Not Determined bother albumin fractionation process steps (processing of cryo-poor plasma to Fraction l+ll+lll/ll+lll supernatant and processing of Fraction V suspension to Cuno 90LP filtrate) showed significant virus reduction capacity in in-vitro viral clearance studies. These process steps also contribute to the overall viral clearance robustness of the manufacturing process. However, since the mechanism of virus removal is similar to that of this particular process step, the viral inactivation data from other steps were not used in the calculation of the mean cumulative reduction factor. *-Recent scientific data suggest that the actual human parvovirus B19 (B19V) is far more effectively inactivated by pasteurization than indicated by model virus data
                        </p>
                    </div>
                </div>
            </div>
            <div class="text">
                Critical steps in the processing of Human Albumin help support its viral safety
            </div>
            <div class="section-headline">
                <h5>Human Albumin is Committed to Quality and Plasma Safety<sup>7,22,23</sup></h5>
            </div>
            <div class="row">
                <div class="quality-commited">
                    <div class="col-md-6">
                        <p class="lowerOdd">
                            Shire is a member of PPTA (Plasma Protein Therapeutics association).22 Shire's innovative quality plasma process is QSEAL-certified and IQPP compliant.7,23
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('img/ppta.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <p>Abbreviated Prescribing Information</p>
        </div>
    </div>
    <div class="container">
        <div class="preference">
            <p><strong>(Before prescribing please consult the full Summary of Product Characteristics (SmPC).)</strong></p>
            <p>Active Ingredient: Human Albumin Indication: Restoration and maintenance of circulating blood volume where volume deficiency has been demonstrated, and use of a colloid is appropriate. The choice of albumin rather than artificial colloid will depend on the clinical situation of the individual patient, based on oflcial recommendations. Dosage and Administration: The concentration of the albumin preparation, dosage and the infusion rate should be adjusted to the patient’s individual requirements. The dose required depends on the size of the patient, the severity of trauma or illness and on continuing fluid and protein losses. Measures of adequacy of circulating volume and not plasma albumin levels should be used to determine the dose required. If human albumin is to be administered, haemodynamic performance</p>
            <a class="read-btn" href="#">Read More</a>
            <div class="cunsult">
                <h4>REFERENCES:</h4>
                <p>1. The SAFE Study Investigators. A Comparison of Albumin and Saline for Fluid Resuscitation in the Intensive Care Unit. (2004). New England Journal of Medicine, 2004(350), pp.2247-2256. </p>
                <p>2. Groeneveld, A., Navickis, R. and Wilkes, M. (2011). Update on the Comparative Safety of Colloids. Annals of Surgery, 253(3), pp.470-483.
                </p>
                <p>3. Vincent, J., Navickis, R. and Wilkes, M. (2004). Morbidity in hospitalized patients receiving human albumin: A meta-analysis of randomized, controlled trials. Critical Care Medicine, 32(10), pp.2029-2038. Barron, M., Wilkes, M. and Navickis, R. (2004). A Systematic Review of the Comparative Safety of Colloids. Archives of Surgery. 139(5), pp. 552-563.S.
                </p>
                <a class="read-btn" href="#">Read More</a>
            </div>
        </div>
    </div>
    
</div>
@endsection
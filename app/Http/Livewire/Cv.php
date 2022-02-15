<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;

class Cv extends Component
{
    public $name;
    public $nameTail;
    public $profile;
    public $email;
    public $phone;
    public $skills;
    public $skillsArray = [];
    public $skillsDescription;
    public $skillsDescriptionArray = ['Skill Description'];
    public $technicalSkills;
    public $technicalSkillsArray = [];
    public $experience;
    public $experienceArray = [];
    public $experienceYear;
    public $experienceYearArray = [];
    public $university;
    public $certificate;
    public $experiencePost;
    public $experiencePostArray = [];
    public $experienceDescription;
    public $experienceDescriptionArray = [];


    public function splitskill()
    {
        $this->skillsArray = explode(',', $this->skills);
        // for($s=0;$s<count($splittedskill);$s++){
        // $this->skillsArray[$s][0]=$splittedskill[$s];
        // }
    }

    public function splitskilldescription()
    {
        $skilldescription = explode(',', $this->skillsDescription);
        // for($s=0;$s<count($skilldescription);$s++){
        $this->skillsDescriptionArray = $skilldescription;
        // }
    }

    public function splittechnical()
    {

        $this->technicalSkillsArray = explode(',', $this->technicalSkills);
    }

    public function splitexperience()
    {

        $this->experienceArray = explode(',', $this->experience);
    }

    public function splityear()
    {

        $this->experienceYearArray = explode(',', $this->experienceYear);
    }

    public function splitpost()
    {

        $this->experiencePostArray = explode(',', $this->experiencePost);
    }

    public function splitexpdescp()
    {

        $this->experienceDescriptionArray = explode(',', $this->experienceDescription);
    }

    public function createPDF()
    {


        // define("DOMPDF_ENABLE_HTML5PARSER", true);
        // define("DOMPDF_ENABLE_FONTSUBSETTING", true);
        // define("DOMPDF_UNICODE_ENABLED", true);
        // define("DOMPDF_DPI", 120);
        // define("DOMPDF_ENABLE_REMOTE", true);
        // define("DOMPDF_ENABLE_JAVASCRIPT", true);
        // define("DOMPDF_ENABLE_CSS_FLOAT", true);
        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadHTML($this->convert_customer_data_to_html())->setPaper('a4', 'portrait');
        // return $pdf->stream();
        $cvdata = ['Name', 'NameTail', 'Email', 'Phone', 'Profile', 'Skills', 'TechnicalSkills', 'Experience', 'University', 'Certificate'];
        // $this->convertedData=$cvdata;
            $pdf = PDF::loadView('cvconvert',compact('cvdata'));

            $pdf->save(public_path().'sdas.pdf', true);
            // dd($pdf);
            return $pdf->download('cv.pdf');
        // $pdf = PDF::loadView('cvconvert', compact('cvdata'));
        // return $pdf->download('cv.pdf');
        // $dompdf=new Dompdf();
        // $dompdf->loadHtml('cvconvert',compact('cvdata'));
        // $dompdf->setPaper('A4','portrait');
        // $dompdf->render();
        // $dompdf->stream('cv.pdf',['Attachment'=>true]);
    }
    function convert_customer_data_to_html()
    {
        //$cvdata = [$this->name,$this->nameTail,$this->email,$this->phone,$this->profile,$this->skillsArray,$this->technicalSkillsArray,$this->experienceArray,$this->university,$this->certificate];
        $cvdata = ['Name', 'NameTail', 'Email', 'Phone', 'Profile', 'Skills', 'TechnicalSkills', 'Experience', 'University', 'Certificate'];
        $customer_data = $cvdata;
        $output = '
        <style>
            /*
    ---------------------------------------------------------------------------------
        STRIPPED DOWN RESUME TEMPLATE
        html resume

        v0.9: 5/28/09

        design and code by: thingsthatarebrown.com
                            (matt brown)
    ---------------------------------------------------------------------------------
    */
    #profileDetails{
      resize: none;
    }
    .msg { padding: 10px; background: #222; position: relative; }
    .msg h1 { color: #fff;  }
    .msg a { margin-left: 20px; background: #408814; color: white; padding: 4px 8px; text-decoration: none; }
    .msg a:hover { background: #266400; }

    /* //-- yui-grids style overrides -- */
    body { font-family: Georgia; color: #444; }
    #inner { padding: 10px 80px; margin: 80px auto; background: #f5f5f5; border: solid #666; border-width: 8px 0 2px 0; }
    .yui-gf { margin-bottom: 2em; padding-bottom: 2em; border-bottom: 1px solid #ccc; }

    /* //-- header, body, footer -- */
    #hd { margin: 2.5em 0 3em 0; padding-bottom: 1.5em; border-bottom: 1px solid #ccc }
    #hd h2 { text-transform: uppercase; letter-spacing: 2px; }
    #bd, #ft { margin-bottom: 2em; }

    /* //-- footer -- */
    #ft { padding: 1em 0 5em 0; font-size: 92%; border-top: 1px solid #ccc; text-align: center; }
    #ft p { margin-bottom: 0; text-align: center;   }

    /* //-- core typography and style -- */
    #hd h1 { font-size: 48px; text-transform: uppercase; letter-spacing: 3px; }
    h2 { font-size: 152% }
    h3, h4 { font-size: 122%; }
    h1, h2, h3, h4 { color: #333; }
    p { font-size: 100%; line-height: 18px; padding-right: 3em; }
    a { color: #990003 }
    a:hover { text-decoration: none; }
    strong { font-weight: bold; }
    li { line-height: 24px; border-bottom: 1px solid #ccc; }
    p.enlarge { font-size: 144%; padding-right: 6.5em; line-height: 24px; }
    p.enlarge span { color: #000 }
    .contact-info { margin-top: 7px; }
    .first h2 { font-style: italic; }
    .last { border-bottom: 0 }


    /* //-- section styles -- */

    a#pdf { display: block; float: left; background: #666; color: white; padding: 6px 50px 6px 12px; margin-bottom: 6px; text-decoration: none;  }
    a#pdf:hover { background: #222; }

    .job { position: relative; margin-bottom: 1em; padding-bottom: 1em; border-bottom: 1px solid #ccc; }
    .job h4 { position: absolute; top: 0.35em; right: 0 }
    .job p { margin: 0.75em 0 3em 0; }

    .last { border: none; }
    .skills-list {  }
    .skills-list ul { margin: 0; }
    .skills-list li { margin: 3px 0; padding: 3px 0; }
    .skills-list li span { font-size: 152%; display: block; margin-bottom: -2px; padding: 0 }
    .talent { width: 32%; float: left }
    .talent h2 { margin-bottom: 6px; }

    #srt-ttab { margin-bottom: 100px; text-align: center;  }
    #srt-ttab img.last { margin-top: 20px }

    /* --// override to force 1/8th width grids -- */
    .yui-gf .yui-u{width:80.2%;}
    .yui-gf div.first{width:12.3%;}
        </style>
        <div id="doc2" class="yui-t7">
            <div id="inner">
                <div id="hd">
                    <div class="yui-gc">
                        <div class="yui-u first">
                            <h1>' . $cvdata[0] . '</h1>
                            <h2>' . $cvdata[1] . '
                            </h2>
                        </div>

                        <div class="yui-u">
                            <div class="contact-info">

                                <h3><span>' . $cvdata[2] . '</span></h3>
                                <h3>' . $cvdata[3] . '</h3>
                            </div>
                            <!--// .contact-info -->
                        </div>
                    </div>
                    <!--// .yui-gc -->
                </div>
                <!--// hd -->

                <div id="bd">
                    <div id="yui-main">
                        <div class="yui-b">

                            <div class="yui-gf">
                                <div class="yui-u first">
                                    <h2>Profile</h2>
                                </div>
                                <div class="yui-u">
                                    <p class="enlarge">
                                    ' . $cvdata[4] . '
                                    </p>
                                </div>
                            </div>
                            <!--// .yui-gf -->

                            <div class="yui-gf">
                                <div class="yui-u first">
                                    <h2>Skills</h2>
                                </div>
                                <div class="yui-u">
                                    @if (count($cvdata[5]) > 0)
                                        @for ($i = 0; $i < count($cvdata[5]); $i++)
                                            <div class="talent">
                                                <h2>' . $cvdata[5] . '</h2>
                                                <p>
                                                    {{-- {{ $skillsDescriptionArray[0] }} --}}
                                                </p>
                                            </div>
                                        @endfor
                                    @endif
                                    {{-- <div class="talent">
                                            <h2>{{ $skillsArray[0] }}</h2>
                                            <p>{{ $skillsDescription }}</p>
                                        </div>
                                        <div class="talent">
                                            <h2>{{ $skillsArray[1] }}</h2>
                                            <p>{{ $skillsDescription }}</p>
                                        </div>

                                </div> --}}
                                </div>
                                <!--// .yui-gf -->

                                <div class="yui-gf">
                                    <div class="yui-u first">
                                        <h2>Technical</h2>
                                    </div>
                                    <div class="yui-u">
                                        <ul class="talent">
                                            @if (count($cvdata[6]) > 0)
                                                @for ($i = 0; $i < count($cvdata[6]); $i++)
                                                    <li>' . $cvdata[6] . '</li>
                                                @endfor
                                            @endif
                                        </ul>

                                        {{-- <ul class="talent">
                                            <li>{{ $technicalSkills }}</li>
                                            <li>{{ $technicalSkills }}</li>
                                            <li class="last">{{ $technicalSkills }}</li>
                                        </ul>
                                        <ul class="talent">
                                            <li>{{ $technicalSkills }}</li>
                                            <li>{{ $technicalSkills }}</li>
                                            <li class="last">{{ $technicalSkills }}</li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <!--// .yui-gf-->

                                <div class="yui-gf">

                                    <div class="yui-u first">
                                        <h2>Experience</h2>
                                    </div>
                                    <!--// .yui-u -->

                                    <div class="yui-u">
                                        @if (count($cvdata[7]) > 0)
                                            @for ($i = 0; $i < count($cvdata[7]); $i++)
                                                <div class="job">
                                                    <h2>{{ $cvdata[7][$i] }}</h2>
                                                    {{-- <h3>
                                                        {{ $experiencePost }}</h3>
                                                    <h4>
                                                        {{ $experienceYear }}
                                                    </h4>
                                                    <p>
                                                        {{ $experienceDescription }}</p> --}}
                                                </div>
                                            @endfor
                                        @endif
                                    </div>
                                    <!--// .yui-u -->
                                </div>
                                <!--// .yui-gf -->

                                <div class="yui-gf last">
                                    <div class="yui-u first">
                                        <h2>Education</h2>
                                    </div>
                                    <div class="yui-u">
                                        <h2>{{ $cvdata[8] }}</h2>
                                        <h3>{{ $cvdata[9] }}</h3>
                                    </div>
                                </div>
                                <!--// .yui-gf -->


                            </div>
                        </div>
                    </div>
                </div>
                </div>
    ';

        return $output;
    }
    function convert_customer_data_to_html2()
    {
        $customer_data = $this->convertedData;
        $output = '
     <h3 style="color:green;" align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Address</th>
    <th style="border: 1px solid; padding:12px;" width="15%">City</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Postal Code</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Country</th>
   </tr>
     ';

        $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">' . $customer_data[0] . '</td>
       <td style="border: 1px solid; padding:12px;">' . $customer_data[0] . '</td>
       <td style="border: 1px solid; padding:12px;">' . $customer_data[0] . '</td>
       <td style="border: 1px solid; padding:12px;">' . $customer_data[0] . '</td>
       <td style="border: 1px solid; padding:12px;">' . $customer_data[0] . '</td>
      </tr>
      ';

        $output .= '</table>';
        return $output;
    }
}

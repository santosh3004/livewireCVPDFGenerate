<div>
    <div class="row justify-content-center align-items-center">
        <div class="p-5 d-flex flex-column">

            <div class="form-group">
                <label for="name">Name</label>
                <input wire:model.lazy='name' type="text" class="form-control" id="name" aria-describedby="emailHelp"
                    placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="nametail">Name Tail</label>
                <input wire:model.lazy='nameTail' type="text" class="form-control" id="nametail"
                    aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="profiledetail">Profile</label>
                <input wire:model.lazy='profile' type="text" class="form-control" id="profileDetails"
                    aria-describedby="emailHelp" placeholder="Enter Profile Details">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input wire:model.lazy='email' type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input wire:model.lazy='phone' type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter phone number">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Skills</label>
                <input wire:keydown.enter='splitskill' wire:model='skills' type="text" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter skills"
                    data-role="tagsinput" id="skills">
            </div>
            <div class="form-group">
                <label for="profiledetail">Skill Details</label>
                <input wire:model='skillsDescription' wire:keydown.enter='splitskilldescription' type="text"
                    class="form-control" id="Skill Details" aria-describedby="emailHelp"
                    placeholder="Enter Profile Details">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Technical Skills</label>
                <input wire:model='technicalSkills' wire:keydown.enter='splittechnical' type="text"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter technical skills">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Experience</label>
                <input wire:model='experience' wire:keydown.enter='splitexperience' type="text" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Experience">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Experience Year</label>
                <input wire:model='experienceYear' wire:keydown.enter='splityear' type="text" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Experience Year">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Experience Post</label>
                <input wire:model='experiencePost' wire:keyboard.enter='splitpost' type="text" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Experience Year">
            </div>
            <div class="form-group">
                <label for="profiledetail">Experience Details</label>
                <input wire:model='experienceDescription' wire:keydown.enter='splitexpdescp' type="text"
                    class="form-control" id="profileDetails" aria-describedby="emailHelp"
                    placeholder="Enter Profile Details">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">University</label>
                <input wire:model.lazy='university' type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter Experience">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Certificate</label>
                <input wire:model.lazy='certificate' type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter Certificate">
            </div>
        </div>
        <div class="p-5">
            <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary" href="/cv">Export to PDF</a>
            </div>
            <div id="doc2" class="yui-t7">
                <div id="inner">
                    <div id="hd">
                        <div class="yui-gc">
                            <div class="yui-u first">
                                <h1>{{
                                    $cvdata[0]
                                    }}</h1>
                                <h2>{{
                                // $nameTail
                                $cvdata[0]
                                 }}</h2>
                            </div>

                            <div class="yui-u">
                                <div class="contact-info">

                                    <h3><span>{{ $cvdata[1] }}</span></h3>
                                    <h3>{{ $cvdata[2] }}</h3>
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
                                            {{ $cvdata[3] }}
                                        </p>
                                    </div>
                                </div>
                                <!--// .yui-gf -->

                                <div class="yui-gf">
                                    <div class="yui-u first">
                                        <h2>Skills</h2>
                                    </div>
                                    {{-- <div class="yui-u">
                                        @if (count($skillsArray) > 0)
                                            @for ($i = 0; $i < count($skillsArray); $i++)
                                                <div class="talent">
                                                    <h2>{{ $skillsArray[$i] }}</h2>
                                                    <p>{{ $skillsDescriptionArray[0] }}</p>
                                                </div>
                                            @endfor
                                        @endif --}}
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
                                    {{-- <div class="yui-u">
                                        <ul class="talent">
                                            @if (count($technicalSkillsArray) > 0)
                                                @for ($i = 0; $i < count($technicalSkillsArray); $i++)
                                                    <li>{{ $technicalSkillsArray[$i] }}</li>
                                                @endfor
                                            @endif
                                        </ul>

                                        <ul class="talent">
                                            <li>{{ $technicalSkills }}</li>
                                            <li>{{ $technicalSkills }}</li>
                                            <li class="last">{{ $technicalSkills }}</li>
                                        </ul>
                                        <ul class="talent">
                                            <li>{{ $technicalSkills }}</li>
                                            <li>{{ $technicalSkills }}</li>
                                            <li class="last">{{ $technicalSkills }}</li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <!--// .yui-gf-->

                                <div class="yui-gf">

                                    <div class="yui-u first">
                                        <h2>Experience</h2>
                                    </div>
                                    <!--// .yui-u -->

                                    {{-- <div class="yui-u">
                                        @if (count($experienceArray) > 0)
                                            @for ($i = 0; $i < count($experienceArray); $i++)
                                                <div class="job">
                                                    <h2>{{ $experienceArray[$i] }}</h2>
                                                    <h3>{{ $experiencePost }}</h3>
                                                    <h4>{{ $experienceYear }}</h4>
                                                    <p>{{ $experienceDescription }}</p>
                                                </div>
                                            @endfor
                                        @endif
                                    </div> --}}
                                    <!--// .yui-u -->
                                </div>
                                <!--// .yui-gf -->


                                <div class="yui-gf last">
                                    <div class="yui-u first">
                                        <h2>Education</h2>
                                    </div>
                                    <div class="yui-u">
                                        <h2>{{ $cvdata[4] }}</h2>
                                        <h3>{{ $cvdata[5] }}</h3>
                                    </div>
                                </div>
                                <!--// .yui-gf -->


                            </div>
                            <!--// .yui-b -->
                        </div>
                        <!--// yui-main -->
                    </div>
                    <!--// bd -->

                    <div id="ft">
                        <p>{{ $cvdata[0] }} &mdash; <span> {{ $cvdata[1] }}</span> &mdash; {{ $cvdata[2] }}
                        </p>
                    </div>
                    <!--// footer -->

                </div><!-- // inner -->


            </div>
            <!--// doc -->
        </div>
    </div>
</div>

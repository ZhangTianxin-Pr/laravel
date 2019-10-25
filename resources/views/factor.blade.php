@extends('layouts.all')
@section('title')
    Drosophila-Welcome
@stop
@section('content')



    <!-- research -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <label id="label_tissue">
                    <p class="p-select">
                        <img src="{{URL::asset('/image/pj-6.png')}}"/>
                        Tissue
                    </p>
                </label>



                <form method="post" name="form_tissue" action="{{ route('subTissue') }}" id="form_tissue">
                    {{ csrf_field() }}
                    <select multiple class="form-control" name="select_tissue" id="" onchange="submittissue();" >
                        <option>adult</option>
                        <option>brain</option>
                        <option>brain and disc</option>
                        <option>body</option>
                        <option>cultured cell</option>
                        <option>CNS</option>
                        <option>dorsal ectoderm</option>
                        <option>dorsal mesothoracic disc</option>
                        <option>embryo</option>
                        <option>egg chamber</option>
                        <option>eye disc</option>
                        <option>eye-antennal disc</option>
                        <option>early glial cell</option>
                        <option>E(z)temperature sensitive cell</option>
                        <option>fatbody</option>
                        <option>head</option>
                        <option>haltere and leg disc</option>
                        <option>intestine</option>
                        <option>larvae</option>
                        <option>late glial cell</option>
                        <option>leg disc</option>
                        <option>muscle</option>
                        <option>mesoderm</option>
                        <option>neuron</option>
                        <option>neural stem cell</option>
                        <option>ovary</option>
                        <option>OSC</option>
                        <option>pupae</option>
                        <option>salivary gland</option>
                        <option>testis</option>
                        <option>wing disc</option>
                        <option>whole organism</option>
                    </select>
                    <input type="submit" style="display:none;">
                </form>
            </div>
            <div class="col-sm-4">
                <label>
                    <p class="p-select">
                        <img src="{{URL::asset('/image/pj-7.png')}}"/>
                        CellLine
                    </p>
                </label>
                <form method="post" name="form_cellline" action="{{ route('subCellLine') }}" id="form_cellline">
                    {{ csrf_field() }}
                    <select multiple class="form-control" name="select_cellline" id="" onchange="submitcellline();" >
                        <option>CME-W1-Cl.8+</option>
                        <option>Kc</option>
                        <option>Kc167</option>
                        <option>ML-DmBG3-c2</option>
                        <option>S2</option>
                        <option>S2-DRSC</option>
                        <option>S2R+</option>
                        <option>SL2</option>
                        <option>S3</option>
                    </select>
                </form>
            </div>


            <div class="col-sm-4">
                <label>
                    <p class="p-select">
                        <img src="{{URL::asset('/image/pj-9.png')}}"/>
                        Factor
                    </p>
                </label>
                <form method="post" name="form_factor" action="{{ route('subFactor') }}" id="form_factor">
                    {{ csrf_field() }}

                    <select multiple class="form-control" name="select_factor" id="" onchange="submitfactor();" >
                        <option>ab</option>
                        <option>abda</option>
                        <option>abdb</option>
                        <option>ac</option>
                        <option>acf</option>
                        <option>ada2b</option>
                        <option>add1</option>
                        <option>adf1</option>
                        <option>ago2</option>
                        <option>aly</option>
                        <option>antp</option>
                        <option>aop</option>
                        <option>ash1</option>
                        <option>ash2</option>
                        <option>atf3</option>
                        <option>ato</option>
                        <option>barr</option>
                        <option>bcd</option>
                        <option>bigh1</option>
                        <option>bon</option>
                        <option>br</option>
                        <option>br140</option>
                        <option>brca2</option>
                        <option>brk</option>
                        <option>brm</option>
                        <option>brwd</option>
                        <option>br-core</option>
                        <option>cad</option>
                        <option>cap-d3</option>
                        <option>cbt</option>
                        <option>caph2</option>
                        <option>cbp</option>
                        <option>cdk9</option>
                        <option>cdc45</option>
                        <option>cdk12</option>
                        <option>cg</option>
                        <option>cg7804</option>
                        <option>cg8436</option>
                        <option>cg8478</option>
                        <option>cg9740</option>
                        <option>chro</option>
                        <option>cic</option>
                        <option>cid</option>
                        <option>clamp</option>
                        <option>clk</option>
                        <option>cnc</option>
                        <option>cp190</option>
                        <option>creb</option>
                        <option>crtc</option>
                        <option>ctbp</option>
                        <option>ctcf</option>
                        <option>cuff</option>
                        <option>cyc</option>
                        <option>d</option>
                        <option>dac</option>
                        <option>deadlock</option>
                        <option>dfd</option>
                        <option>disco</option>
                        <option>dl</option>
                        <option>dll</option>
                        <option>dnaj1</option>
                        <option>dp1</option>
                        <option>dre4</option>
                        <option>dref</option>
                        <option>dring</option>
                        <option>dsx</option>
                        <option>dwg</option>
                        <option>e93</option>
                        <option>e2f</option>
                        <option>ecr</option>
                        <option>eif4a3</option>
                        <option>eip74ef</option>
                        <option>elav</option>
                        <option>ell</option>
                        <option>elys</option>
                        <option>en</option>
                        <option>epc</option>
                        <option>esg</option>
                        <option>etl1</option>
                        <option>eve</option>
                        <option>exd</option>
                        <option>ez</option>
                        <option>facs</option>
                        <option>faire</option>
                        <option>fer3</option>
                        <option>foxo</option>
                        <option>fru</option>
                        <option>fs(1)h</option>
                        <option>gcn5</option>
                        <option>gcm</option>
                        <option>gfzf</option>
                        <option>GFP</option>
                        <option>glcnac</option>
                        <option>grh</option>
                        <option>gro</option>
                        <option>gt</option>
                        <option>gug</option>
                        <option>h</option>
                        <option>h1</option>
                        <option>h2aub1</option>
                        <option>h2av</option>
                        <option>h2b</option>
                        <option>h3ac</option>
                        <option>h3k27me1</option>
                        <option>h3k4me1</option>
                        <option>h3k4me2</option>
                        <option>h3k4me3</option>
                        <option>h3k9ac</option>
                        <option>h3K9acS10ph</option>
                        <option>h3k9me1</option>
                        <option>h3k9me2</option>
                        <option>h3k9me3</option>
                        <option>h3k14ac</option>
                        <option>h3k18ac</option>
                        <option>h3k23ac</option>
                        <option>h3k27ac</option>
                        <option>h3k27me1</option>
                        <option>h3k27me2</option>
                        <option>h3k27me3</option>
                        <option>h3K27acS28ph</option>
                        <option>h3k36me1</option>
                        <option>h3k36me2</option>
                        <option>h3k36me3</option>
                        <option>h3k79me1</option>
                        <option>h3k79me2</option>
                        <option>h3k79me3</option>
                        <option>h3S10ph</option>
                        <option>h4</option>
                        <option>h4ac</option>
                        <option>h4k5ac</option>
                        <option>h4k8ac</option>
                        <option>h4k16ac</option>
                        <option>h4k20me1</option>
                        <option>hb</option>
                        <option>hdac1</option>
                        <option>hdac3</option>
                        <option>hdac4</option>
                        <option>hdac6</option>
                        <option>hdac11</option>
                        <option>hr4</option>
                        <option>hrm</option>
                        <option>hkb</option>
                        <option>hlpp1</option>
                        <option>hmgd1</option>
                        <option>hmr</option>
                        <option>hnf4</option>
                        <option>hp1</option>
                        <option>hp1a</option>
                        <option>hp2</option>
                        <option>hp4</option>
                        <option>hr39</option>
                        <option>hr78</option>
                        <option>hsf</option>
                        <option>hsp90</option>
                        <option>hth</option>
                        <option>ibf1</option>
                        <option>ice1</option>
                        <option>insv</option>
                        <option>jarid2</option>
                        <option>jil-1</option>
                        <option>jim</option>
                        <option>jumu</option>
                        <option>kdm2</option>
                        <option>kdm4a</option>
                        <option>kdm5</option>
                        <option>kmg</option>
                        <option>kn</option>
                        <option>kni</option>
                        <option>kr</option>
                        <option>l3mbt</option>
                        <option>lab</option>
                        <option>lacz</option>
                        <option>lam</option>
                        <option>lark</option>
                        <option>lilli</option>
                        <option>lmd</option>
                        <option>lola</option>
                        <option>lov</option>
                        <option>lpt</option>
                        <option>lsd1</option>
                        <option>m1bp</option>
                        <option>mad</option>
                        <option>mago</option>
                        <option>mbdr2</option>
                        <option>mcm</option>
                        <option>mcm2</option>
                        <option>mcrs2</option>
                        <option>med1</option>
                        <option>med30</option>
                        <option>mel</option>
                        <option>mef2</option>
                        <option>mi-2</option>
                        <option>mle</option>
                        <option>mlf</option>
                        <option>mod</option>
                        <option>modmdg4</option>
                        <option>mof</option>
                        <option>mot1</option>
                        <option>mrg15</option>
                        <option>msl</option>
                        <option>msl1</option>
                        <option>msl2</option>
                        <option>msl3</option>
                        <option>myb</option>
                        <option>myc</option>
                        <option>myst5</option>
                        <option>n</option>
                        <option>ndf</option>
                        <option>nelf-e</option>
                        <option>nipped-b</option>
                        <option>nls</option>
                        <option>nonstop</option>
                        <option>nsl1</option>
                        <option>nsl3</option>
                        <option>nup93</option>
                        <option>nup98</option>
                        <option>nurf</option>
                        <option>opbp</option>
                        <option>orc</option>
                        <option>orc2</option>
                        <option>ovo</option>
                        <option>parp</option>
                        <option>pb</option>
                        <option>pc</option>
                        <option>pcl</option>
                        <option>pds5</option>
                        <option>ph</option>
                        <option>pho</option>
                        <option>pita</option>
                        <option>piwi</option>
                        <option>pnt</option>
                        <option>pof</option>
                        <option>PolII</option>
                        <option>prd</option>
                        <option>pr-set7</option>
                        <option>psc</option>
                        <option>psq</option>
                        <option>rad21</option>
                        <option>rbf</option>
                        <option>rhi</option>
                        <option>rib</option>
                        <option>rnps1</option>
                        <option>row</option>
                        <option>rpd3</option>
                        <option>rrp6</option>
                        <option>rrp40</option>
                        <option>rsf1</option>
                        <option>rump</option>
                        <option>sa</option>
                        <option>sc</option>
                        <option>scm</option>
                        <option>scr</option>
                        <option>scute</option>
                        <option>sd</option>
                        <option>set1</option>
                        <option>sfmbt</option>
                        <option>sgf11</option>
                        <option>sha</option>
                        <option>shep</option>
                        <option>shn</option>
                        <option>sim</option>
                        <option>sin3a</option>
                        <option>smc1</option>
                        <option>smc3</option>
                        <option>smox</option>
                        <option>sna</option>
                        <option>so</option>
                        <option>sp1</option>
                        <option>spps</option>
                        <option>spt3</option>
                        <option>spt5</option>
                        <option>sr</option>
                        <option>ssrp</option>
                        <option>stat92e</option>
                        <option>suh</option>
                        <option>suhw</option>
                        <option>sumo</option>
                        <option>suur</option>
                        <option>su(var)</option>
                        <option>su(var)3-3</option>
                        <option>su(var)3-7</option>
                        <option>su(var)3-9</option>
                        <option>suz12</option>
                        <option>tbp</option>
                        <option>tbph</option>
                        <option>tcf</option>
                        <option>temp</option>
                        <option>tfiia</option>
                        <option>tfiib</option>
                        <option>tfiiic</option>
                        <option>tll</option>
                        <option>top3b</option>
                        <option>trem</option>
                        <option>trf2</option>
                        <option>trl</option>
                        <option>trr</option>
                        <option>trx</option>
                        <option>ts</option>
                        <option>ttk</option>
                        <option>twi</option>
                        <option>ubh2b</option>
                        <option>ubqn</option>
                        <option>ubx</option>
                        <option>uh</option>
                        <option>upf1</option>
                        <option>upset</option>
                        <option>usp</option>
                        <option>utx</option>
                        <option>velo</option>
                        <option>vtd</option>
                        <option>w</option>
                        <option>wapl</option>
                        <option>wds</option>
                        <option>y14</option>
                        <option>yki</option>
                        <option>yl-1</option>
                        <option>z4</option>
                        <option>zelda</option>
                        <option>zen</option>
                        <option>zfh1</option>
                        <option>zipic</option>
                        <option>zld</option>

                    </select>
                </form>
            </div>
        </div>
    </div>


    <!-- input research -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color: #987cb9, direction: 145, strength:15)" width="100%" color=#987cb9 SIZE=1 align="center">
            </div>
            <div class="col-sm-3">
                <form class="form-inline">

                    <label class="sr-only input-research" for="search1">input-research</label>
                    <input type="text"  style="width:100%; height:35px;" class="form-control input-research-text" id="search1" placeholder="  Query the input">

                </form>
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-default input-research-button">Search</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <p class="p-result">
                    <img src="{{URL::asset('/image/pj-10.png')}}"/>
                    The Result
                </p>
            </div>
            <div class="col-sm-10">
                <HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1 align="center">
            </div>
        </div>
    </div>
    <div>

        <!--  table  -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-expandable">
                            <thead class="thead-style">
                            <tr>
                                <th>SRXID</th>
                                <th>Factor</th>
                                <th>Tissue</th>
                                <th>CellLine</th>
                                <th>Stage</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($total1s as $total1)
                                <tr class="tr-style">
                                    <td>{{$total1->SRXID}}</td>
                                    <td>{{$total1->Factor_relation->FACTOR ?? ''}}</td>
                                    <td>{{$total1->Tissue_relation->TISSUE ?? ''}}</td>
                                    <td>{{$total1->Cellline_relation->CELL_LINE_CON ?? ''}}</td>
                                    <td>{{$total1->Stage}}</td>
                                </tr>
                                <tr  style="display: none;" class="tr-style">
                                    <td colspan="8">
                                        <ul>
                                            @if (count($total1->Sex) > 0 )
                                                <li>Factor Known As : {{$total1->Factor_relation->FACTOR_KNOWN_AS ?? ''}}</li>
                                            @else
                                                <li style="display: none;">Factor Known As : {{$total->Factor_relation->FACTOR_KNOWN_AS ?? ''}}</li>
                                            @endif
                                            @if (count($total1->Sex) > 0 )
                                                <li>Sex : {{$total1->Sex}} </li>
                                            @else
                                                <li style="display: none;">Sex : {{$total1->Sex}} </li>
                                            @endif
                                            @if (count($total1->GSMID) > 0 )
                                                <li>GSMID : {{$total1->GSMID}} </li>
                                            @else
                                                <li style="display: none;">GSMID : {{$total1->GSMID}}</li>
                                            @endif
                                            @if (count($total1->Antibody) > 0 )
                                                <li>Antibody : {{$total1->Antibody}} </li>
                                            @else
                                                <li style="display: none;">Antibody : {{$total1->Antibody}} </li>
                                            @endif
                                            @if (count($total1->Genotype) > 0 )
                                                <li>Genotype : {{$total1->Genotype}} </li>
                                            @else
                                                <li style="display: none;">Genotype : {{$total1->Genotype}}  </li>
                                            @endif
                                            @if (count($total1->Cia_relation) > 0 )
                                                <li>Citation :
                                                    @foreach($total1->Cia_relation as $information)
                                                        PMID&nbsp;&nbsp;&nbsp;&nbsp;{{$information->PMID  ?? ''}}
                                                        <br>{{$information->TITLE  ?? ''}}
                                                    @endforeach
                                                </li>
                                            @else
                                                <li style="display: none;">Citation :
                                                    @foreach($total1->Cia_relation as $information)
                                                        {{$information->PMID  ?? ''}}&nbsp;&nbsp;&nbsp;&nbsp;{{$information->TITLE  ?? ''}}
                                                    @endforeach
                                                </li>
                                            @endif
                                            <li><a href="#name1" class="tr-button-style">View the Results of the Motif and Target</a></li>
                                            <li>
                                                <table class="table table-bordered">
                                                    <thead class="hide-thead-style">
                                                    <tr>
                                                        <th>FastQC</th>
                                                        <!--<th>Mapped</th>-->
                                                        <th>Uniquely Mapped</th>
                                                        <th>FRip</th>
                                                        <th>fc>10</th>
                                                        <th>DHS</th>
                                                        <th>PBC</th>
                                                        <th>Peak in P/E/intron/intergenic</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="tr-style">
                                                        @if($total1->FastQC>=25)
                                                            <td class="font-color2">{{$total1->FastQC}}</td>
                                                        @else
                                                            <td class="font-color1">{{$total1->FastQC}}</td>
                                                        @endif

                                                        @if($total1->Uniquely_Mapped>=60)
                                                            <td class="font-color2">{{$total1->Uniquely_Mapped}}%</td>
                                                        @else
                                                            <td class="font-color1">{{$total1->Uniquely_Mapped}}%</td>
                                                        @endif
                                                        @if($total1->FRip>=1)
                                                            <td class="font-color2">{{$total1->FRip}}%</td>
                                                        @else
                                                            <td class="font-color1">{{$total1->FRip}}%</td>
                                                        @endif
                                                        @if($total1->FC_10>=20)
                                                            <td class="font-color2">{{$total1->FC_10}}%</td>
                                                        @else
                                                            <td class="font-color1">{{$total1->FC_10}}%</td>
                                                        @endif

                                                        @if($total1->DHS>=70)
                                                            <td class="font-color2">{{$total1->DHS}}%</td>
                                                        @else
                                                            <td class="font-color1">{{$total1->DHS}}%</td>
                                                        @endif
                                                        @if($total1->PBC>=80)
                                                            <td class="font-color2">{{$total1->PBC}}%</td>
                                                        @else
                                                            <td class="font-color1">{{$total1->PBC}}%</td>
                                                        @endif
                                                        <td>{{$total1->Peak}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                            <li>Conservation:
                                                <div class="image-set" style="z-index: 1;">
                                                    <a data-magnify="gallery" href="{{URL::asset('/image/SRR1198696.png')}}">
                                                        <img src="{{URL::asset('/image/SRR1198696.png')}}" alt="" width="50">
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$total1s -> links()}}
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1 align="center">
        </div>

        <!-- pagination
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="pagination1" class="page f1">
                        <div class="ui-pagination-container">
                            <a class="ui-pagination-page-item" href="javascript:void(0);" data-current="1">Home Page</a>
                            <a class="ui-pagination-page-item" href="javascript:void(0);" data-current="2">Prev Page</a>
                            <a class="ui-pagination-page-item" href="javascript:void(0);" data-current="1">1</a>
                            <a class="ui-pagination-page-item" href="javascript:void(0);" data-current="2">2</a>
                            <a class="ui-pagination-page-item active" href="javascript:void(0);" data-current="3">3</a>
                            <a class="ui-pagination-page-item" href="javascript:void(0);" data-current="4">4</a>
                            <a class="ui-pagination-page-item" href="javascript:void(0);" data-current="5">5</a>
                            <label class="sr-only input-research" for="jump-input">research</label>
                            <input type="text" style="width:93px; height:27px;" class="" id="jump-input" placeholder="Page Number">
                            <a class="ui-pagination-page-btn" href="javascript:void(0);">Jump</a>
                            <a class="ui-pagination-page-item" href="javascript:void(0);" data-current="4">next</a>
                            <a class="ui-pagination-page-item" href="javascript:void(0);" data-current="12">Last Page</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1 align="center" class="under-table-hr">
                </div>
            </div>
        </div>


        <!-- report -->
        <!--        <div class="col-sm-2"><a name=name1></a></div>
                <div class="col-sm-2">
                    <a class="md-trigger btn btn-primary btn-sm" href="javascript:;" data-modal="modal-12">Motif</a>
                </div>
                <div class="col-sm-2">
                    <a class="md-trigger btn btn-primary btn-sm" href="javascript:;" data-modal="modal-3">Target</a>
                </div>

                <div class="col-sm-2">
                    <a class="md-trigger btn btn-primary btn-sm">WashU</a>
                </div>
                <div class="col-sm-2">
                    <a class="md-trigger btn btn-primary btn-sm">UCSC</a>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div id="modal-12" class="md-modal md-effect-12">
            <div class="md-content">
                <p> select</p>
                <div>
                    <button class="md-close btn-sm btn-primary">close</button>
                </div>
            </div>
        </div>
        <div id="modal-3" class="md-modal md-effect-3">
            <div class="md-content">
                <p> select</p>
                <div>
                    <button class="md-close btn-sm btn-primary">close it</button>
                </div>
            </div>
        </div>
        -->

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a name=name1></a>
                    <ul id="tabs">
                        <!--   <li><a href="#" title="tab1">Data Qulity</a></li>-->
                        <li><a href="#" title="tab2">Motif Report</a></li>
                        <li><a href="#" title="tab3">Target Report</a></li>
                        <!--   <li><a href="#" title="tab4">Four</a></li>  -->
                    </ul>
                    <div id="content" class="tab-context1">
                    <!--       <div id="tab1">

                    <table class="table table-bordered">
                        <thead class="hide-thead-style">
                        <tr>
                            <th>FastQC</th>
                            <th>Mapped</th>
                            <th>Uniquely Mapped</th>
                            <th>FRip</th>
                            <th>fc>10</th>
                            <th>DHS</th>
                            <th>PBC</th>
                            <th>Peak in P/E/intron/intergenic</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="tr-style">

                            <td>{{$total1->FastQC}}%</td>
                            <td>{{$total1->Mapped}}%</td>
                            <td>{{$total1->Uniquely_Mapped}}%</td>
                            <td>{{$total1->FRip}}%</td>
                            <td>{{$total1->FC_10}}%</td>
                            <td>{{$total1->DHS}}%</td>
                            <td>{{$total1->PBC}}%</td>
                            <td>{{$total1->Peak}}</td>

                        </tr>
                        </tbody>
                    </table>

                </div>    -->
                        <div id="tab2">
                            <p>Aenean dui nulla, egestas sit amet auctor vitae, facilisis id odio. Donec dictum gravida feugiat.</p>
                        </div>
                        <div id="tab3">
                            <p>Non erat laoreet ullamcorper.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @stop




        @section('script')
            <script>
                function submittissue(){
                    //???form??????
                    var form = document.getElementById("form_tissue");
                    form.submit();
                    //form????
                }
            </script>
            <script>
                function submitcellline(){
                    var form = document.getElementById("form_cellline");
                    form.submit();
                }
            </script>
            <script>
                function submitfactor(){
                    var form = document.getElementById("form_factor");
                    form.submit();
                }
            </script>

            <script type="text/javascript" language="javascript">
                $(function(){
                    //Bind the change event
                    $("#dropLang").unbind("change", eDropLangChange).bind("change", eDropLangChange);
                    $("#dropFrame").unbind("change", eDropFrameChange).bind("change", eDropFrameChange);
                });
                //The change event of language dropdown-list
                var eDropLangChange = function(){
                    //The selected value of the language dropdown-list.
                    var selectedValue = $(this).val();
                    //show all options.
                    $("#dropFrame").children("span").each(function(){
                        $(this).children().clone().replaceAll($(this));
                        //use the content of the <span> replace the <span>
                    });
                    //Filter the data through selected value of language dropdown-list except <Please Select>.
                    //If the option is <Please Select>, it only needs to show all and hide nothing.
                    if(parseInt(selectedValue) != 0){
                        //hide the option whose parentid is not equal with selected value of language dropdown-list.
                        //The <Please Select> option should not be hidden.
                        $("#dropFrame").children("option[parentid!='" + selectedValue + "'][value!='0']").each(function(){
                            $(this).wrap("<span style='display:none'></span>");
                            //add a <span> around the <option> and hide the <span>.
                        });
                    }
                };
                //The change event of frame dropdown-list.
                var eDropFrameChange = function(){
                    //Find the selected option of frame dropdown-list. set the value of language dropdown-list by selected parentid.
                    $("#dropLang").val($(this).children("option:selected").attr("parentid"));
                };
            </script>

@stop
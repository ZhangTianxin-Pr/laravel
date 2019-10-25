



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
                            <th>Antibody</th>
                            <th>Sex</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($totals as $total)
                       <tr class="tr-style">
                           <td>{{$total->SRXID}}</td>
                           <td>{{$total->Factor}}</td>
                           <td>{{$total->Tissue}}</td>
                           <td>{{$total->CellLine}}</td>
                           <td>{{$total->Stage}}</td>
                           <td>{{$total->Antibody}}</td>
                           <td>{{$total->Sex}}</td>
                       </tr>
                       <tr  style="display: none;" class="tr-style">
                           <td colspan="5">
                               <ul>
                                   <li>Pibulication : </li>
                                   <li>Citation : </li>
                                   <li>Title : </li>
                                   <li><a href="#name1" class="tr-button-style">View the Results of the Motif and Target</a></li>
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
            </div>
        </div>
    </div>
</div>






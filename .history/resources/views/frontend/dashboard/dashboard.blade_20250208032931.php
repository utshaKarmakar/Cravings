@include('frontend.Dashboard.header')


<section class="section pt-4 pb-4 osahan-account-page">

         <div class="container">
            <div class="row">
               
            @include('frontend.Dashboard.sidebar')


               <div class="col-md-9">
                  <div class="osahan-account-page-right rounded shadow-sm bg-white p-4 h-100">
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                           <h4 class="font-weight-bold mt-0 mb-4">Past Orders</h4>
                           <div class="bg-white card mb-4 order-list shadow-sm">
                              <div class="gold-members p-4">
                                

                              
                              </div>
                           </div>
                       
                       
                        </div>
                    
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>










 @include('frontend.Dashboard.footer')
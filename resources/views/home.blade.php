@extends('layouts.app')

@section('content')
@include('aside') 
<div class="container">
           
    @extends('aside') 
   <!-- ========================= Main ==================== -->
   <div class="main"> 
       <!-- ======================= Cards ================== -->
       <div class="cardBox">
           <div class="card">
               <div>
                   <div class="numbers">1.506</div>
                   <div class="cardName">Vues Quotidiennes</div>
               </div>

           </div>
           <div class="card">
               <div>
                   <div class="numbers">50</div>
                   <div class="cardName">Projets</div>
               </div>

           </div>
           <div class="card">
               <div>
                   <div class="numbers">345</div>
                   <div class="cardName">Contact</div>
               </div>

           </div>
           <div class="card">
               <div>
                   <div class="numbers">5</div>
                   <div class="cardName">Formation</div>
               </div>

           </div>
       </div>
       <!-- ================= Order Details List ======================== -->
       <div class="details">
           <div class="recentOrders">
               <div class="cardHeader">
                   <h2>Etudiant</h2> 
               </div>

               <table>
                   <thead>
                       <tr>
                           <td>Name</td>
                           <td>Price</td>
                           <td>Payment</td>
                           <td>Status</td>
                       </tr>
                   </thead>

                   <tbody>
                       <tr>
                           <td>Star Refrigerator</td>
                           <td>$1200</td>
                           <td>Paid</td>
                           <td><span class="status deliverd">Delivered</span></td>
                       </tr>
                       <tr>
                           <td>Dell Laptop</td>
                           <td>$120</td>
                           <td>Due</td>
                           <td><span class="status pending">Pending</span></td>
                       </tr>

                       <tr>
                           <td>Apple Watch</td>
                           <td>$1200</td>
                           <td>Paid</td>
                           <td><span class="status return">Return</span></td>
                       </tr>

                       <tr>
                           <td>Addidas Shoes</td>
                           <td>$1200</td>
                           <td>Due </td>
                           <td><span class="status inProgress">In Progress</span></td>
                       </tr>

                       <tr>
                           <td>Name</td>
                           <td>Price</td>
                           <td>Payment</td>
                           <td>Status</td>
                       </tr>
                       <tr>
                           <td>Star Refrigerator</td>
                           <td>$1200</td>
                           <td>Paid</td>
                           <td><span class="status deliverd">Delivered</span></td>
                       </tr>
                       <tr>
                           <td>Dell Laptop</td>
                           <td>$120</td>
                           <td>Due</td>
                           <td><span class="status pending">Pending</span></td>
                       </tr>

                       <tr>
                           <td>Apple Watch</td>
                           <td>$1200</td>
                           <td>Paid</td>
                           <td><span class="status return">Return</span></td>
                       </tr>

                       <tr>
                           <td>Addidas Shoes</td>
                           <td>$1200</td>
                           <td>Due </td>
                           <td><span class="status inProgress">In Progress</span></td>
                       </tr>
                       </thead>
               </table>
           </div>

           <!-- ============ New Customers ================= -->

           <div class="recentCustomers">
               <div class="cardHeader">
                   <h2>Staff</h2>
               </div>

               <table>
                   <tr>
                       <td>
                           <div class="imgBx" width="60px">
                               <img src="images/customer02.jpg" alt="">
                           </div>
                       </td>
                       <td>
                           <h4>jhon <br> <span>morocco</span></h4>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <div class="imgBx" width="60px">
                               <img src="images/customer02.jpg" alt="">
                           </div>
                       </td>
                       <td>
                           <h4>David <br> <span>Italy</span></h4>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <div class="imgBx" width="60px">
                               <img src="images/customer01.jpg" alt="">
                           </div>
                       </td>
                       <td>
                           <h4>franck <br> <span>France</span></h4>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <div class="imgBx" width="60px">
                               <img src="images/customer02.jpg" alt="">
                           </div>
                       </td>
                       <td>
                           <h4>tom <br> <span>germany</span></h4>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <div class="imgBx" width="60px">
                               <img src="images/customer01.jpg" alt="">
                           </div>
                       </td>
                       <td>
                           <h4>jack <br> <span>America</span></h4>
                       </td>
                   </tr>

               </table>
           </div>
       </div> 
   </div> 
</div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-header text-center">
            <h5>CRUD Application with Restful API</h5>
        </div>
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
                    {{session()->get('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="float-end mb-5">
                <a href="" class="btn btn-dark btn-sm">Add New Student</a>
            </div>
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td style="width: 10%">
                            <img src="" alt="" style="width: 50%">
                        </td>
                        <td>Sooraj kumar</td>
                        <td>sooraj@gmail.com</td>
                        <td>030000</td>
                        <td>Daharki</td>
                        <td>
                            <span class="badge bg-success rounded-pill">Active</span>
                            <span class="badge bg-danger rounded-pill">InActive</span>            
                        </td>
                        <td>
                            <a href="" class="text-dark p-3">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-toggle-on"></i>
                            </a>    
                            <a href="">
                                <i class="fa-solid fa-toggle-off"></i>
                            </a>            
                        </td>
                    </tr>
                  </tbody>
            </table>
        </div>
    </div>        
@endsection
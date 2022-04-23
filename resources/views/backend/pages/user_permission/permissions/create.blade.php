@extends('backend.layouts.app')
@section('title','Permissions - ')
@section('content')
    <div class="content-body">
        @include('backend.pages.user_permission.nav')
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-category" role="tabpanel" aria-labelledby="add-category-tab">
                <div class="container content-title">
                    <h4>{{__('Permissions Information')}}</h4>
                </div>
                <div class="container">
                    <form id="permissionsForm" method="post" action="{{route('backend.permissions.store')}}" enctype="multipart/form-data" class="add-brand-form">
                        @csrf()
                        @include('backend.pages.user_permission.permissions.form')
                        <div class="col-lg-7 offset-3">
                            <div class="from-submit-btn">
                                <button class="submit-btn" type="submit">{{__('Save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

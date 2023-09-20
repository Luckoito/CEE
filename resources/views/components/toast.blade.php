{{-- 
    Types:
    1 = Success
    2 = Warning
    3 = Danger

    Example usages:

    On the controller ⤵️
    $notify = ['type'=>'1', 'title'=>'Success! 😁', 'text'=>'Success message'];
    return view('pages/page', compact('notify'));

    On the view ⤵️
    @if(isset($notify))
        @component('components.toast')
            @slot('type', $notify['type'])
            @slot('title', $notify['title'])
            @slot('text', $notify['text'])
        @endcomponent
    @endif

    Or directly on the view ⤵️

    --}}

<div class="toastNotification">

    <div class="toast">
        <div class="toastHeader">
            <h1 class="toastTitle">{{$title}}</h1>
            {{-- <i class="fa-regular fa-circle-xmark closeToastButton"></i> --}}
        </div>

        <div class="toastContent">
            <hr>
            <div class="toastText">
                <p>{{$text}}</p>
            </div>
        </div>
    </div>

</div>

@section('css')
<style>
.toastNotification{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: flex-start;
    position: absolute;
    z-index: 2;
    top: 0px;
    right: 0px;
    margin: 10px;
    animation: animToast 10s forwards;
    transition: all 1s;
}

.toast{
    padding-block: 10px;
    padding-inline: 20px;
    border: solid 2px rgba(231, 231, 231, 0.197);
    border-radius: 10px;
    max-width: 300px;
    max-height: 300px;
    background-color: rgb(251, 251, 251);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    color: var(--textColor);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.toastHeader{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.toastTitle{
    padding-block: 3px;
    text-align: center;
    text-justify: center;
    font-size: 15px;
    max-height: 38px;
    overflow: hidden;
} 

hr{
    border: solid 1px rgba(194, 194, 194, 0.115);
    border-radius: 2px;
    width: 100px;
}

.toastText{
    max-height: 250px;
    overflow: scroll;
    padding-block: 5px;
}

/* .closeToastButton{
    padding-inline: 10px;
    transition: all .2s;
}

.closeToastButton:hover{
    cursor: pointer;
    color: rgb(255, 83, 83);
} */

@keyframes animToast{
0%{opacity: 0%;}
20%{opacity: 100%;}
90%{opacity: 100%;}
100%{opacity: 0%;}
}
</style>

@endsection

@section('js')
<script>
let type = {{$type}}
console.log({{$type}})
let toast = $('.toast')

if (type == 1){
    $(toast).css('border-inline-end-color', 'lightgreen')
} else if (type == 2){
    $(toast).css('border-inline-end-color', 'yellow')
} else if (type == 3){
    $(toast).css('border-inline-end-color', 'red')
}

/* $('.closeToastButton').on('click',()=>{
    $(toast).css('opacity', '0')
    console.log('click')
}) */
</script>
@endsection
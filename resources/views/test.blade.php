@php
    $user = "Shivam Arya";

    $fruits = ['Apple','banana','orange','grapes'];
@endphp


<script>
    // var data = @json($fruits);
    // console.log(data);

    var data ={{Js::from($fruits)}}

    data.forEach(function(entry){
        console.log(entry);        
    });


</script>
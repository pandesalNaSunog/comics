
@if(session()->has('message'))
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{session('message')}}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            let toast = $('#liveToast');
            toast.toast('show');
            toast.toast({delay: 5000})
        });
    </script>
@endif
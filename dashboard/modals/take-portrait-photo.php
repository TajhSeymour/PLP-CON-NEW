<!-- Take New Portrait Photo -->
<div 
    class="modal-dialog d-flex flex-column position-fixed justify-content-center align-items-center top-0 start-0 bottom-0 end-0 border-0" 
    style="z-index:10;background:black;border-radius:10px;"
>
    <div class="modal-content position-relative overflow-hidden w-100 h-100" style="background:black;border-radius:10px;">
        <div class="position-absolute w-100 h-100" style="background:black;inset:0;">
            <div class="d-flex flex-column position-absolute top-0 start-0 w-100 h-100">    
                <video id="video" autoplay playsinline width="480" height="640" style="z-index:0;"></video>
                <canvas id="canvas" style="display: none;width: 480px;height: 640px;z-index:0;"></canvas>
            </div>   
        </div>
        <span class="delegate_id-none"></span>
        <div class="position-absolute d-flex justify-content-between align-items-end p-4" style="inset:0;">
            <a href="javascript:void(0)" class="btn btn-link link-danger fw-medium" data-bs-dismiss="modal">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" color="#FFF" class="cursor-pointer" height="28" width="28" xmlns="http://www.w3.org/2000/svg" style="color: rgb(255, 255, 255);">
                    <path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                </svg>
            </a>
            <button type="button" id="capture" class="btn btn-outline">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#FFF" class="cursor-pointer" height="28" width="28" xmlns="http://www.w3.org/2000/svg" style="color: rgb(255, 255, 255);">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M9.828 5l-2 2H4v12h16V7h-3.828l-2-2H9.828zM9 3h6l2 2h4a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h4l2-2zm3 15a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0-2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                    </g>
                </svg>
            </button>
            <button type="button" id="flip-btn" class="btn btn-outline">
                <svg 
                    stroke="currentColor" 
                    fill="currentColor" 
                    stroke-width="0" 
                    viewBox="0 0 24 24" 
                    color="#FFF" 
                    class="cursor-pointer" 
                    height="28" 
                    width="28" 
                    xmlns="http://www.w3.org/2000/svg" 
                    style="color: rgb(255, 255, 255);"
                >
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M9.828 5l-2 2H4v12h16V7h-3.828l-2-2H9.828zM9 3h6l2 2h4a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h4l2-2zm.64 4.53a5.5 5.5 0 0 1 6.187 8.92L13.75 12.6h1.749l.001-.1a3.5 3.5 0 0 0-4.928-3.196L9.64 7.53zm4.677 9.96a5.5 5.5 0 0 1-6.18-8.905L10.25 12.5H8.5a3.5 3.5 0 0 0 4.886 3.215l.931 1.774z"></path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div>
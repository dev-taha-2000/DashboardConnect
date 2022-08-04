<div class="navigation" >
    <ul>
        <li>
            <a href="#">
                <span class="icon"> 
                    <ion-icon name="logo-apple"></ion-icon>
                </span>
                <span class="title">Connect Academy</span>
            </a>
        </li> 
        <li>
            <a href="/home"> 
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li> 

        <li>
            <a href="{{route('staff.index')}}">
                <span class="icon">
                    <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title">Staff</span>
            </a>
        </li>

        <li>
            <a href="{{route('contact.index')}}">    
                <span class="icon">
                    <ion-icon name="chatbubble-outline"></ion-icon>
                </span>
                <span class="title">Contact</span>
            </a>
        </li>


        <li>
            <a href="{{route('projet.index')}}"> 
                <span class="icon">
                    <ion-icon name="settings-outline"></ion-icon>
                </span>
                <span class="title">Projets</span>
            </a> 
        </li>

        <li>
            <a href="{{url('formation')}}">    
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <span class="title">Formations</span>
            </a>
        </li> 
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <span class="title">logout</span> 
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li> 
    </ul>
</div>
<footer style="width: 100%; height: 168px; background-color: #39393A; color: white; position: relative; bottom: 0; font-family: 'Inter', serif; padding-top: 40px;">
    <div style="position: absolute; width: 192px; height: 120px; top: 18px; left: 160px;">
        <p style="font-weight: 700; font-size: 41px; line-height: 40.5px; color: white;">
            SUB<br /><span style="color: #B2D3A8;">URBN</span>
        </p>
    </div>
    <div style="position: absolute; top: 68px; right: 160px; text-align: right;">
        <p style="font-weight: 400; font-size: 16px; line-height: 20px; color: white; white-space: nowrap;">
            Contact Us : suburbn@gmail.com
        </p>
    </div>
    @auth
        @if(Auth::user()->role === 'staff' || Auth::user()->role === 'manager')
            <div style="position: absolute; top: 68px; right: 416px; text-align: right;">
                <!-- Bookings Link -->
                <a href="{{ route('service.bookings') }}" style="font-weight: 400; font-size: 16px; line-height: 20px; color: white; margin-right: 20px; text-decoration: none;">
                    Bookings
                </a>
            </div>
            <div style="position: absolute; top: 68px; right: 556px; text-align: right;">
                <!-- roster Table Link -->
                <a href="{{ route('roster.view') }}" style="font-weight: 400; font-size: 16px; line-height: 20px; color: white; text-decoration: none;">
                    Roster Table
                </a>
            </div>
        @endif
        @if(Auth::user()->role === 'manager')
            <div style="position: absolute; top: 68px; right: 696px; text-align: right;">
                <!-- roster Setting Link -->
                <a href="{{ route('roster.form') }}" style="font-weight: 400; font-size: 16px; line-height: 20px; color: white; text-decoration: none;">
                    Roster Settings
                </a>
            </div>
        @endif
    @endauth
</footer>

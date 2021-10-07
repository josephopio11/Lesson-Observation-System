<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    .bubbles {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .bubble {
        position: absolute;
        left: var(--bubble-left-offset);
        bottom: -75%;
        display: block;
        width: var(--bubble-radius);
        height: var(--bubble-radius);
        border-radius: 50%;
        -webkit-animation: float-up var(--bubble-float-duration) var(--bubble-float-delay) ease-in infinite;
        animation: float-up var(--bubble-float-duration) var(--bubble-float-delay) ease-in infinite;
    }

    .bubble::before {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 0, 0.425);
        border-radius: inherit;
        -webkit-animation: var(--bubble-sway-type) var(--bubble-sway-duration) var(--bubble-sway-delay) ease-in-out alternate infinite;
        animation: var(--bubble-sway-type) var(--bubble-sway-duration) var(--bubble-sway-delay) ease-in-out alternate infinite;
    }

    .bubble:nth-child(0) {
        --bubble-left-offset: 48vw;
        --bubble-radius: 7vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(1) {
        --bubble-left-offset: 16vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(2) {
        --bubble-left-offset: 99vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(3) {
        --bubble-left-offset: 100vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(4) {
        --bubble-left-offset: 55vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(5) {
        --bubble-left-offset: 16vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(6) {
        --bubble-left-offset: 76vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(7) {
        --bubble-left-offset: 10vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 7s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(8) {
        --bubble-left-offset: 41vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(9) {
        --bubble-left-offset: 52vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(10) {
        --bubble-left-offset: 5vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(11) {
        --bubble-left-offset: 43vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(12) {
        --bubble-left-offset: 26vw;
        --bubble-radius: 2vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(13) {
        --bubble-left-offset: 94vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(14) {
        --bubble-left-offset: 69vw;
        --bubble-radius: 2vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(15) {
        --bubble-left-offset: 12vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(16) {
        --bubble-left-offset: 40vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(17) {
        --bubble-left-offset: 40vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(18) {
        --bubble-left-offset: 66vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(19) {
        --bubble-left-offset: 14vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(20) {
        --bubble-left-offset: 18vw;
        --bubble-radius: 1vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(21) {
        --bubble-left-offset: 74vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(22) {
        --bubble-left-offset: 69vw;
        --bubble-radius: 1vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(23) {
        --bubble-left-offset: 16vw;
        --bubble-radius: 2vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(24) {
        --bubble-left-offset: 61vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(25) {
        --bubble-left-offset: 69vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(26) {
        --bubble-left-offset: 10vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(27) {
        --bubble-left-offset: 55vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(28) {
        --bubble-left-offset: 83vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(29) {
        --bubble-left-offset: 36vw;
        --bubble-radius: 2vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(30) {
        --bubble-left-offset: 26vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(31) {
        --bubble-left-offset: 16vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(32) {
        --bubble-left-offset: 36vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(33) {
        --bubble-left-offset: 80vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(34) {
        --bubble-left-offset: 29vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(35) {
        --bubble-left-offset: 4vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(36) {
        --bubble-left-offset: 61vw;
        --bubble-radius: 7vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(37) {
        --bubble-left-offset: 80vw;
        --bubble-radius: 1vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(38) {
        --bubble-left-offset: 0vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(39) {
        --bubble-left-offset: 75vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(40) {
        --bubble-left-offset: 51vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(41) {
        --bubble-left-offset: 43vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(42) {
        --bubble-left-offset: 25vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(43) {
        --bubble-left-offset: 19vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(44) {
        --bubble-left-offset: 87vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(45) {
        --bubble-left-offset: 90vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(46) {
        --bubble-left-offset: 46vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(47) {
        --bubble-left-offset: 94vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(48) {
        --bubble-left-offset: 14vw;
        --bubble-radius: 7vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(49) {
        --bubble-left-offset: 93vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(50) {
        --bubble-left-offset: 4vw;
        --bubble-radius: 7vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    @-webkit-keyframes float-up {
        to {
            transform: translateY(-175vh);
        }
    }

    @keyframes float-up {
        to {
            transform: translateY(-175vh);
        }
    }

    @-webkit-keyframes sway-left-to-right {
        from {
            transform: translateX(-100%);
        }

        to {
            transform: translateX(100%);
        }
    }

    @keyframes sway-left-to-right {
        from {
            transform: translateX(-100%);
        }

        to {
            transform: translateX(100%);
        }
    }

    @-webkit-keyframes sway-right-to-left {
        from {
            transform: translateX(100%);
        }

        to {
            transform: translateX(-100%);
        }
    }

    @keyframes sway-right-to-left {
        from {
            transform: translateX(100%);
        }

        to {
            transform: translateX(-100%);
        }
    }

    .joseph {
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: rgba(255, 255, 255, 0.8);
        background-color: #0e0e0e;
        text-align: center;
    }

    .profile-rounded {
        border-radius: 50%;
        width: 200px;
    }

    .glass {
        position: absolute;
        background-color: rgba(255, 255, 255, 0.1);
        min-width: 480px;;
        padding: 1em;
        border-radius: 1em;
        -webkit-backdrop-filter: blur(1em);
        backdrop-filter: blur(1em);
    }

    .glass h1 {
        font-weight: 600;
    }

    .glass img {
        opacity: 90%;
    }

    .bold-paragraph {
        font-weight: 600;
    }

    /*# sourceMappingURL=script.css.map */

</style>

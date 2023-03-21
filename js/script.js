var MR = function (X) { return Math.random() * X }, TwL = TweenLite, G = document.querySelectorAll('.crystal');

        function BTweens() {
            var W = window.innerWidth, H = window.innerHeight, C = 10;
            TwL.killDelayedCallsTo(BTweens); 
            TwL.delayedCall(C * 8, BTweens);
            for (var i = G.length; i--;) {
                var c = C, BA = [], GWidth = G[i].offsetWidth, GHeight = G[i].offsetHeight;
                while (c--) { 
                    var SO = MR(2); 
                    BA.push({ x: MR(W - GWidth), y: MR(H - GHeight)}); 
                };
                if (G[i].T) { 
                    G[i].T.kill() 
                }
                G[i].T = TweenMax.to(G[i], C * 2, { bezier: { timeResolution: 2, type: "soft", values: BA }, 
                delay: i * 0.1, ease: Linear.easeNone });
            }
        };
        BTweens();
        window.onresize = function () {
            TwL.killDelayedCallsTo(BTweens); 
            TwL.delayedCall(0.2, BTweens);
        };
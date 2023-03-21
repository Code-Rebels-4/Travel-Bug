var MR = function (X) { return Math.random() * X }, TwL = TweenLite, G = document.querySelectorAll('.crystal');

        function BTweens() {
            var W = window.innerWidth, H = window.innerHeight, C = 40;
            TwL.killDelayedCallsTo(BTweens); 
            TwL.delayedCall(C * 4, BTweens);
            for (var i = G.length; i--;) {
                var c = C, BA = [], GWidth = G[i].offsetWidth, GHeight = G[i].offsetHeight;
                while (c--) { 
                    var SO = MR(1); 
                    BA.push({ x: MR(W - GWidth), y: MR(H - GHeight)}); 
                };
                if (G[i].T) { 
                    G[i].T.kill() 
                }
                G[i].T = TweenMax.to(G[i], C * 4, { bezier: { timeResolution: 0, type: "soft", values: BA }, delay: i * 0.35, ease: Linear.easeNone });
            }
        };
        BTweens();
        window.onresize = function () {
            TwL.killDelayedCallsTo(BTweens); 
            TwL.delayedCall(0.4, BTweens);
        };
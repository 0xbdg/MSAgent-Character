<?php
// This block MUST be at the very top of the page!
@ob_start('ob_gzhandler');
if(isset($_GET['icon']))
{
	$e=$_GET['icon'];
	$I['file']='R0lGODlhEAAPAOYAAIyMlu7u9PHx9vDw9fT0+PPz97u7vvf3+vb2+d/f4vn5+/39/vv7/Pr6+/b29+3t7pCRnI6PmZOVn5ibpZWYopqeqJ2hq6KnsaClr9fZ3ff4+t/g4qSqtKmwuqeuuM3P0vHz9tze4be6vuzv8+vu8urt8eXo7Kuzva61vquyu9/k6uXp7uTo7cvU3dHZ4dDY4Nfe5d3j6dzi6Nvh5+Po7eLn7OHm69HV2ejs8Ofr7+7x9OHk597h5PT2+PP19/Hz9evt7+Lk5t3f4fr7/Pn6+/b3+PX299Tc49rh5+ru8fDz9ff5+vb4+fP19vz9/f////7+/vv7+/Pz8+/v7+zs7Orq6ubm5uHh4d7e3sDAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAFkALAAAAAAQAA8AAAevgFmCJ4SFhDuCiYIdUI1QDQ9NKCGKgh4LjQsOG0smKRmVHAxPUAtGQktLPxxTihcKjU5FQR8iBhdXihgHC05DTEA8NwkYWIoWCENEGj1KJCsIFsaJFQRMPT5KIzk2BBXTghMFIEo6JDk1MQUT4FkUAiVJOCs2MTACFO0SAyw0NiozYLgYIKEdhAAyZiCBceRFiwAQ2kUIQLFixQjtAGjcyBFAuyhSqFgZSXJklSyBAAA7';
	$I['dir']='R0lGODlhEAAOAOYAAP79uv//4/j43f//5f7+5v7+6f//7f//7//8qf/9vf/9wf/+xP/9yf793P/+4f32hP/6iv/6pP/9zP/4kf/4nP/4n/373//1jf/2nP32tvnodfzuff/xhv/3uP/revftrvz32v/ocf/odP/rhPnz0/z44+DAPOHAPe/gnPXrvv3zyM6hAMicAMeaANStJdu4PNy7RODDWN7EaOLIauLIa//10ffuzcudAMiaAMSWAMOVAMGTAL2PALqMAMilLtayPNe2TNW0TNKxTNm7V9e5V82vU9zEd+7jvurfvPXryfbu072NALiKALaIALOEALKDALGCAK+AAMinRMalRMOiRNCuTM6sTMuqTMmnTLyfUdm8ZtW9et3Kl+XUoa19AKp6AK6EG7GHIr2YNr+cQ7iXQ8akTMSjTb6jXs2waMOqbNjEkNDDpM2xctfQwPz8/Pv7+/r6+vX19fHx8ezs7Ovr6+jo6Ofn5+bm5uHh4eDg4N/f397e3t3d3cDAwAAAAAAAACH5BAEAAH0ALAAAAAAQAA4AAAe4gEkzMkNERl19iYqKMSkGjwZbRVJTVGhqijACEJwQEpCPWXKJOBYPp6ioFjh2bn06IBuys7MgOnpwfTwkGiY/QEFCVVZXWGVmYl9MNic0BwHQ0QMOBUhgT0cuJQoJ3d4LAARja15aKAwI6QgRFRQYGVxke1AvDRMXHB4iIfwjSmFt6iz50KGGwYMGVbBJgyeODxYrbrTIsYNHjyZOopzhM8fVHT17QooUmYdOrj5v4KhcyRKOqz6BAAA7';
	$I['doc']='R0lGODlhEAAQAPcAAAEyeCg+bQgviwU2ggg8iAZCmwlLsiFMmjpamDJbtipitzhhrjppuE1qp0BmtERquVVtpF11q2d+s0JuxEl0zFJ3ylV7zl99w1h+0XeKnG6Ov3KQv3KRv3aTvXqVu3uVvH6XulWAyFmBxliCxV2ExF6ExGCBzWGIw2KJw2WKwmeLwWmMwWyOwGeK1XeR1XyX2P8A/4KavIWdvoOc2oCe5oigwIuiwoyiwouk3ZGnxpesyZCu1p2xzYml6ZOr5qO20am71K260K+836q+8a/A2LPD2rfI9MnS4tbc6tLi+tTj+tbk+tfl+9zi9Nnm+9vn+9zo+97p++Dq/OHs/OPt/OXu/Obv/Ojw/erx/evy/e3z/e/0/fDy+vD2/vL3/vT4/vX5/vf6/vn7/////wCpEQAAABLs7NS5srGlQNcVPRQCgBQCQBLtDNdNrxQCgGQCeNdN4xQCgBLtFAAAAJEFyCNr8BLt4JEFURQHqJEFbRLuOAAAABLtPAAAAJEFyFiHuBLuCJEFURQHSBLtWAAAAJEFyFiHuBLuJJEFURQHSJEFbRLuaAAABAAAAOaERAAAAgAABAAAMAAAACNr+NSLsf3QAAAAMAAABBQAABLrmJD7bAAAIAAAAFiHwBLuOAAAAAAAIADwqgAAIAAAAAAAAJDnvJDVhhLuCJD7bJD7cZDVhpDnvBQAABLt5JDnyBLujJDuGJD7eAH//wAABBLtaAAAABLujJDuGJEFcP///5EFbZEJvBQAAAAAAFiHwBLuSJEJkliHwAAAABLunN3tDt3tIGKmyAABxGKm1AAAAAAAAAAAAAAAAAAAABLuaBLu7BS3YBS3YBLuoOb8I8OlLsYaoBLu2MLCzQAABMLC4xS04BS3YAAAAxSwbsXS4BSwABLu1BLupP///xLvQMNclMEgcP///8LC40SV1RS3YGMboGMboEUEtRQAABS04IoASAAAAAAAAOqG1OqG1OqG1OqG1AAC8BLvJN1sdBLvLIoASIoASObgowAACeaCsAAABCH5BAEAADAALAAAAAAQABAAAAjhAGEILALkBw8dOWzIAAFCoEMYRMSEAfPFS5ctIMY0hOHDRw8aL1pgqDBBgZaMGjmOWclypYEsKDX2GDLDBBITTSDgMICFoU8aTWZcaPKgSYMMBq5YqUJlCggXY1w8EHIAB4IjBZY2lQKixRgJDyIMSBBgTIEqO3ZIieLBwhgICIwMGBBkDIGtUaB0oDBGwAIuAxysHDAlLZQnGxi0bAlg7WEnLBQYmFygMoEBAKKkdcJEhcMbWqc4fsJ5CQqHNZimXZ12iZISDmXgfczEdRIRDmN8+NCBg4YVKU6QGBEiREAAADs=';
	$I['xls']='R0lGODlhEAAQAPcAADVJGjRNGTVNGDRSFzRTFzRYFTReEzReFDVeGjNpDzNtDjRtDjRjETRkEjZjGztoHjpvHjNwDTlwHjp3GTx3Hz57HjJoKDtxIjp9Jz99IWB+XEKAJUaELEeFLUKJNUeIO02MNk+OOUiSP1OTQFKXSFiYR1qaSVieUl6YVV+hU1uiWHCbbWGiVGGgWGWnW2eqX2SoYGmtYmqsZW2wZ3SlcG6Ov3KQv3KRv3aTvXqVu3uVvH6XulWAyFmBxliCxV2ExF6ExGGIw2KJw2WKwmeLwWmMwWyOwP8A/4KavIWdvoephZC9i5ywm6Gzn4igwIuiwoyiwpGnxpesyZCu1p2xzaO20am71JPCjpPEjZbEkZrGlq/A2LPD2sDRwMzay8/dz9bi1t/p39Li+tTj+tbk+tfl+9nm+9vn+9zo+97p++Xs5eDq/OHs/OPt/OXu/Obv/Ojw/erx/evy/e3z/e/0/fD2/vL3/vT4/vX5/vf6/vn7/////xLtPAAAAJEFyCLVGBLuCJEFURQHSBLtWAAAAJEFyCLVGBLuJJEFURQHSJEFbRLuaAAABAAAAOaERAAAAgAABAAAMAAAAFeQiNSLsf3QAAAAMAAABBQAABLrmJD7bAAAIAAAACLVIBLuOAAAAAAAIADwqgAAIAAAAAAAAJDnvJDVhhLuCJD7bJD7cZDVhpDnvBQAABLt5JDnyBLujJDuGJD7eAH//wAABBLtaAAAABLujJDuGJEFcP///5EFbZEJvBQAAAAAACLVIBLuSJEJkiLVIAAAABLunN3tDt3tIGKmyAABwGKm1AAAAAAAAAAAAAAAAAAAABLuaBLu7BSuABSuABLuoOb8I8OlLsYaoBLu2MLCzQAABMLC4xSsQBSuAAAAAxSg2MXS4BSgABLu1BLupP///xLvQMNclMEgcP///8LC40SV1RSuAGMboGMboEUEtRQAABSsQKR+UAAAAAAAAOqG1OqG1OqG1OqG1AACBBLvJN1sdBLvLKR+UKR+UObgowAACeaCsAAABCH5BAEAAEcALAAAAAAQABAAAAjhAI8I5GKlChUpUZ4k2bFDoMMjW/TkwXPHTh06O/Y0PDIjhosUJkaA6LChwpyMGjnuWclyZQQ5KDXOuAKDxB4vKFAwURCHoc8XarDI8ECjxQcwCeC8cdOGzQ4We75oUYHBQpc9DJY2XbOjxJ4lJ7KouLAizAE3U6asSZMjxBIKEBwsEfGgSYGtadDg4NBSiQQEGgawSYvmjI0MLVsKWFvYjJEJERYkaGCgAIEAANKkNVOGiEMoWtkwPsOZjBCHTpimXZ2WzBggDpPgbVzGtZgeDpHo0IHjRo0iQ4L88MGDR0AAADs=';
	$I['jpg']=$I['gif']=$I['png']='R0lGODlhEAAQAPcAAPuBhP0RI9fU1r24vL25vn+CmKSxzLfF4cPL28bO3srO1oOk4WF4opyuzpWlwpurx6i30qm30ae1zqa0zb3M57G/2Kq3z6m2zcTR6aSvw9Dd9crW7NPe8tXg88PM3OLs/tXe7+Lr/Njh8eHp98/W4wBe9Yibup+vyZemv6e2z6e2zsXW8rLC26e1zK+91Kezx8jU6Nvo/eDr/dzm9uLs/OTt/MvT4ODn897l8dvi7uvy/gxn7Keyw7K9zsTQ4uPu/t7p+dzm9c/Y5t7n9dri7svb8djh7ejw++vw9+fs87jI2+Hu/lem/vH3/lSp/uTx/vP5/snj9+33/qGoqPz+/v3+/lXSYAC1AH3GdS6qHnDIW1OmL+Hp173JqoGaKby9srurRv3slf7dbf7cc/7Xb/7QZ/3SdP7FVd6wUP7LaP6/SP68SeS7cv6vMP62QNycN+KuWOCuW/vt1fueGf6qL/6vN/6xOf65V+C/jP2XEv6eGvmeH/6gI/6iJOCSKM+WR9ScUPjEff6ZG8qELbB/ROG0f/2EAPeAAf6IAuR5BP6JCP6QENKTTdmseuC7kbBhEKlfFa5iGMR0I8d+M45aJr6BRM2VW9ikcNuugNG8pvLk1v37+f17AO1zAKlUBrNiFqBdHplZHr97PcB/Q690Pc6KTcWHT7F9T9CYY9Opg9KujN25l6NJAJJFBK5sMpNnQcqcdKaGbL+fhPfw6qpKALeDWtijebGReOC4mdm2nKuQe+XDqfjy7tm0nedXBa+ZjPjz8OfOwauSh/BvO/55QcY0AN7a2d4dA+kwFdsTBv7+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAMsALAAAAAAQABAAAAj/AJcJXIbDSI6DREDAQKBs4MAgVZRJVNaEwwYbDgUaozJRGZQON46QcLgplaNLmFZpoiLDh5AKHgTuKmVJlzBVqEbBSlIEQgMTy2wxkhOFiZMFXLoQOiWCwgEHuCQ1KvRlRwkGWqxgERVrBYYHkwAF68VmSgE8Wa5sCRQqgYYTg8LEgWOGTJk0YLz8uQOJQAwDptCMEXNmjZs6dIgBGOZpwJIJs3JVeqPGDp0+c5AFSNZKwQ8JAnnV8tOGj6A8vo4VozTjg4qBwFzt0bNIESJDrH49oZHCoaxHiQ5x6kTr1QggIXoPFJCJVKRPoG4hkVJDRwSHQ5T04JHhBQsXF1pYA0AREAA7';
	$I['txt']='R0lGODlhEAAQAPcAAB6Kcm6Ov3KQv3KRv3aTvXqVu3uVvH6XulWAyFmBxliCxV2ExF6ExGGIw2KJw2WKwmeLwWmMwWyOwP8A/4KavIWdvoigwIuiwoyiwo+lxJGnxpKoxpWryJesyZmtypCu1p2xzaO20am71K/A2LPD2tLi+tTj+tbk+tfl+9nm+9vn+9zo+97p++Dq/OHs/OPt/OXu/Obv/Ojw/erx/evy/e3z/e/0/fD2/vL3/vT4/vX5/vf6/vn7/////xLuYAAAQAAAAAAAABLuqBLuaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQBLurJDuGAAAAAAAAgAAAQACEBLuYAACEJEZcAa6SAa6KAAAAAAAAAHskAABHhLsBJDuGBLswNS5TACpEQCpERLs1NS47q0nqACpEQAAABLs7NS5sq0nqNcVPRQCgBQCQBLtDNdNrxQCgCoFBtdN4xQCgBLtFAAAAJEFyCLqgBLt4JEFURQHqJEFbRLuOAAAABLtPAAAAJEFyAcKIBLuCJEFURQHSBLtWAAAAJEFyAcKIBLuJJEFURQHSJEFbRLuaAAABAAAAOaERAAAAgAABAAAMAAAACLqiNSLsf3wAAAAMAAABBQAABLrmJD7bAAAIAAAAAcKKBLuOAAAAAAAIADwqgAAIAAAAAAAAJDnvJDVhhLuCJD7bJD7cZDVhpDnvBQAABLt5JDnyBLujJDuGJD7eAH//wAABBLtaAAAABLujJDuGJEFcP///5EFbZEJvBQAAAAAAAcKKBLuSJEJkgcKKAAAABLunN3tDt3tIGKmyAABsGKm1AAAAAAAAAAAAAAAAAAAABLuaBLu7BR5EBR5EBLuoOb8I8OlLsYaoBLu2MLCzQAABMLC4xR2sBR5EAAAAxRwicXS4BRwABLu1BLupP///xLvQMNclMEgcP///8LC40SV1RR5EGMboGMboEUEtRQAABR2sIPdOAAAAAAAAOqG1OqG1OqG1OqG1AABsBLvJN1sdBLvLIPdOIPdOObgowAACeaCsAAABCH5BAEAABMALAAAAAAQABAAAAipACcIJCEiBIgOGi5UOHBAoMMJI3js0JEDxw0bB3o0nACgo8ePHXto5CiyBwCTKEuKPBCypcmTABgybEkTJowXLljChPnSJM4WOkGCbNGCRQGHHmrQmCEjxk0XRVcQcMhh6YerWD+sUCHA4QamTn+y2JpCgsMMTbNiTYECgkMMYaGOVcH2hAOHFm6qvXrCBAOHFcSSRdG3RAKHFAwYIDAgQIQHDRYoQIAgIAA7';
	$I['avi']=$I['mpg']=$I['mpeg']=$I['mp3']='R0lGODlhEAAQAPcAAEhHSHd2d//+/+/q9+7r9KalqPLx9NrZ3HZ1e4mJjx0dHoeHi+Dg4/n5++np6+jo6tLS1NjY2ZqamxYelholkUBHhIWGjHB2lREwshozpCdDujZPuoOEiIWNqBI7tJWWmdTV2B1NwihTuC9iyDZqzlF60X+Vw/z9/xtbyxZczvb5/h1m0EqA0EZ/z1aP3srd9h502hh24VSc6SuD3oqLjNfY2SGN70ik6cHe9ODn6urv8MTGxnG+AYTVDXiuKaPOX6DEZ+nu4XO3AWWgAU56AYypWoWWaNPcw22pAWacAVyKCTpTCm2bFF+BHHehLEVnAWGNBk9zBXWDV1BhKsbKvZm0VajRMHKKKJG5AUlaBnp9b4ulGoqMgYiIhoKCgLOzseDg325qVf/++dqvAdmvAei7As2oBtCoB8qlB+jAF+jAG6eLE5yDGezHK+fFN4RyIN7AOOTEOuPDO4BuIu3MQ+XIR+rLSuXHSOXHSu3VaO3Wc+7YeIuFa/ry0vz343lxVn16cnh2cMHAvpOOiPjx6evq6eHc2v9zTfV6WfnRxuHLxfvx7v9KG/lHG/hIG/lOIvxNI/dOJP5ZLv5aMexYMvVeOPRjPv9xTP92U/BzU/99Xet2WPKijvWvnu+unvGxofnMwNvLx/r19P////v7+/Ly8uzs7Ojo6Obm5uTk5OLi4uDg4N/f39jY2NbW1tLS0s/Pz87Ozs3NzczMzMfHx7Ozs62traenp56enpycnJqamnl5eWtra2RkZE5OTiEhIRwcHBsbGxMTEwgICAQEBP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAMUALAAAAAAQABAAAAj/AIsJXMRpE6UtPopQMSCwYTFQlRpBeoSFxxAlRg44TBRpEiZNiKz0EJKEiBQIAkVZkoTpU6gINY78QALlCRdVxTw5utSJEK8dDggMAMIkypQCpDIxOqSIEABeu2gJCOKkyRIvq5QeMuTU169hvR5UuZJFC6wWM27kcBqMGDBYDPLAMcNnFosYNnAQUiDsFqwTfuy4OQNolokUMGToGCSowahRe+6oWWMhFggRKFa4eKFCTB89deSM+SOBVbEOHkKMIFGCDh08ccq8+WBLYKELGTBo2NCmTRoyczjkStUQTIIKFCagQcMmDA1crRwWK/WlC4JAARboqnVKekNTrmTJBnqFapTDgAA7';
	$I['pdf']='R0lGODlhEAAQAPcAAFoAAGMAAHMYGG6Ov3KQv3KRv3aTvXqVu3uVvH6XulWAyFmBxliCxV2ExF6ExGGIw2KJw2WKwmeLwWmMwWyOwIwACJQAAJwhIa0ACLUAAL05OZxCQr1KSr1SWsYAAM4ICM4QENYYGM4pMd45OecIEPcQEPcYGO85OfcpKf8xOc5KSt5KStZja+dKSu9CSu9KSudaWu9SUu9SWudaY+dzc+97e/9zc/8A/4KavIWdvoigwIuiwoyiwo+lxJGnxpKoxpWryJesyZmtypywzJ2xzaO20am71Ky+1q/A2LPD2t6EhN61veeMjO+cnO+trdLi+tTj+tbk+tfl+9nm+9vn+9zo+97p++/W1ufv9+Dq/OHs/OPt/OXu/Obv/Ojw/erx/evy/e3z/e/0/fD2/vL3/vT4/vX5/vf6/vn7/////xQCgBQCQBLtDNdNrxQCgBEGqNdN4xQCgBLtFAAAAJEFyCJ8mBLt4JEFURQHqJEFbRLuOAAAABLtPAAAAJEFyFWi2BLuCJEFURQHSBLtWAAAAJEFyFWi2BLuJJEFURQHSJEFbRLuaAAABAAAAOaERAAAAgAABAAAMAAAACJ8oNSLsf3QAAAAMAAABBQAABLrmJD7bAAAIAAAAFWi4BLuOAAAAAAAIADwqgAAIAAAAAAAAJDnvJDVhhLuCJD7bJD7cZDVhpDnvBQAABLt5JDnyBLujJDuGJD7eAH//wAABBLtaAAAABLujJDuGJEFcP///5EFbZEJvBQAAAAAAFWi4BLuSJEJklWi4AAAABLunN3tDt3tIGKmyAACvGKm1AAAAAAAAAAAAAAAAAAAABLuaBLu7BSjUBSjUBLuoOb8I8OlLsYaoBLu2MLCzQAABMLC4xSo8BSjUAAAAxSgLcXS4BSgABLu1BLupP///xLvQMNclMEgcP///8LC40SV1RSjUGMboGMboEUEtRQAABSo8KR+UAAAAAAAAOqG1OqG1OqG1OqG1AACXBLvJN1sdBLvLKR+UKR+UObgowAACeaCsAAABCH5BAEAADcALAAAAAAQABAAAAjcAG8ITGKkCJEgPnbkSJBAoMMbSNCcMVOGzBgxCdI0fHhkYsWLYTJqvNGBgwYVM2DIgOFCBBiRGm28SIHChIkSJkhg+MKw54kQIEB4+OABQ4YKXrpw2aIlgYUAAARsmLrhwgalTLNsvDFETBgwX1Zg1ZLFygGHQr5+uTKiSVYrVQw4BALWSw0sTJyUrUKFgMMfX7xcaeHEyYoWMZRMoeCwR1IYS8jCXcJCigSHPLrMYCKZ7xQpUSA41EGDRmcqn6NAceAwx1vPoKE8WeAQBwIEBgoMmBDhQQMGChQEBAA7';
	$I['rar']=$I['zip']='R0lGODlhDwAQAOYAAMjY9gRLsBJPqRZQpydpx7TP9iFbrSNfsChltixquzt6xEmH0VqU2G2h4HSk4HGc05jC9ZCz3jmF1zqA0EOK106P2JC235S335a535i531am9FOa5FOa4l2l61uZ13Cv7ne09IKx3ziZ81yr9mGz/2i3/2Go62as7XK7/26x7ni+/3W38Ha38HKx5nu88XWx5IjD84HA8oTD84vK+ZvP9YnJ963b+bzl+8fs/fT///79mf//r///uf//xPr2k//9pP/4hv/6kPr1kPr1kf/7mvfvgvPkbdm/Ktm/LPn25dm8L/vwvfvzzt61AfbNLNm3KfzUMdm3Mdu5M9q6Nd6+O/3ZR/vdZPzkhfvnl/roodq0Kv7TOP3VOf3aUfzZWPzebfvedPziffrjj/rprfrrs/juytKgB9SjCNWlC8+hDtWmEM+hENKmFNWmFtSnG9WqH9SqH9WqIdWrItiuKOjRh7J9DrR8D7mFKaptDbJ7I6ttDax0HfEZAf///wAAAAAAACH5BAEAAH0ALAAAAAAPABAAAAe8gH2CgzIxLispJyaCdGmOdCY5ODc2NDAsC31pfJxpBJ+gEyMeAWtaT0dISlFSU1R2fSEvAXI6PTw7P0RBQEZ1fRYyAW8+SWVjYmBeW02/GDMBcENMZFhhVlVQzX3P0dPV19nbF9BxQktZV19dXE7bGTUBbEVzbm1qaGdm2xEtAXd59ODZAwrUgw8dAgwStKgECRQqVHRQsHCQiQQIDhwwoLCiRxOLPA7i4KABgwoUJAgQuQFAAQggNIgYEAgAOw==';
			$I['acd']=$I['acs']='R0lGODlhIAAgAHAAACH5BAEAAAMALAAAAAAgACAAgQAAAP///4AAAAAAAAKBnI+py+0Po5wTAGdtzXfw+0XfGFIIWZpZwAYr221A2861asH2nLvU2+PtfsEdx0cUWgRMZibJabKcGhGpieVAPjSsFLbtdb2CWowhpgW86vMiXVa34siGmCmfx92K9DpPV4Vho8d2E5aXKPjgp8g3SJi3KCP3ZHJCcqm5ydnpOVEAADs=';
	header('Cache-control: max-age=2592000');
	header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T',time()+2592000));
	header('Content-type: image/gif');
	print base64_decode(isset($I[$e])?$I[$e]:$I['file']);
	exit;
}
// End block

// Start configs
$self = basename(isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : __FILE__);
$sitename='More sorting options are towards the right. The default sorting option is A-Z.';
$date='M-d-y'; // date format
$ignore=array('.','..','.htaccess','header.html','CharIcon32PX.png','index.php','icon.php','styles.css', 'backup','!Ponx_Mode','Thumbs.db',$self); // ignore these files
// End configs
$root=dirname(__FILE__);
$dir=isset($_GET['dir'])?$_GET['dir']:'';if(strstr($dir,'..'))$dir='';
$path="$root/$dir/";
$dirs=$files=array();
if(!is_dir($path)||false==($h=opendir($path)))exit('Directory does not exist.');
while(false!==($f=readdir($h)))
{
	if(in_array($f,$ignore))continue;
	if(is_dir($path.$f))$dirs[]=array('name'=>$f,'date'=>filemtime($path.$f),'url'=>$self.'?dir='.rawurlencode(trim("$dir/$f",'/')));
	else$files[]=array('name'=>$f,'size'=>filesize($path.$f),'date'=>filemtime($path.$f),'url'=>trim("$dir/".rawurlencode($f),'/'));
}
closedir($h);
$current_dir_name = basename($dir);
$up_dir=dirname($dir);
$up_url=($up_dir!=''&&$up_dir!='.')?$self.'?dir='.rawurlencode($up_dir):$self;
// END PHP ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
<title><?php print$current_dir_name==''?'Directory list':$current_dir_name?></title>
    <link rel="apple-touch-icon" href="/images/appicon.png" sizes="155x155">
<link rel="shortcut icon" href="/images/LogoOfTMAFE.png">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VF8JRRK7QT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VF8JRRK7QT');
</script>
<!-- SiteMetaProperty1 -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="TMAFE.COM - The official website for the largest MS Agent Community.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style type="text/css">
body { font-family: tahoma, verdana, arial; font-size: 1em; color: black; padding-top: 8px; cursor: default; background-color: #36393F; text-align: left;}
#idx { border: 3px solid #25272C; width: 500px; width:100%;height:100%;}
#idx td.center { text-align: left; width:100%;height:100%;}
#idx td { text-align: left;border-bottom: 1px solid #25272C; width:100%;height:100%;}
#idx img { margin-bottom: -2px; }
#idx table { background-color:#25272C;color: #fff; width: 100%; margin-top:3px; height:100%;}
	th {color:#fff;width:100%;height:100%; background-color:#25272C;}
#idx span.link { color: #0066DF; cursor: pointer; }
#idx .rounded { padding: 10px 7px 10px 10px; -moz-border-radius:6px; }
#idx .gray { background-color:#25272C;border-bottom: 1px solid #25272C; }
#idx p { padding: 0px; margin: 0px;line-height:1.4em;}
#idx p.left { float:left;width:60%;padding:3px;color:#fff;}
#idx p.right {float:right;width:35%;text-align:right;color:#fff;padding:3px;}
#idx strong {background-color:#25272C; font-family: "Trebuchet MS", tahoma, arial; font-size: 1.2em; font-weight: bold; color: #fff; padding-bottom: 3px; margin: 0px; }
#idx a:link    { color: #fff; }
#idx a:visited { color: #fff; }
#idx a:hover   { text-decoration: none; }
#idx a:active  { color: #fff; }
::before,
::after {
    margin: 0;
    padding: 0;
}
html {
    font-size: 10px;
    font-family:Georgia, "Times New Roman", Times, serif;
}
h1 h2 h3 h4 {
font-family:Georgia, "Times New Roman", Times, serif;
}
a {
    display:block;
    text-decoration: none;
}
.container {
    max-width:98rem;
    margin: 0 auto;
    padding: 0 2.2rem;
}
	/*  tables
	******************************/
	table {border:1px solid #AAAAAA;background-color:#25272C;width:100%;height:100%;}
	th,td {border:1px solid #AAAAAA;background-color:#25272C;}
	th {padding:3px; font-weight:bold;color:#344b3b; background-color:#25272C;}
	tr {margin:0 0 5px 0;padding:3px;background-color:#25272C;}
	td {padding:5px;margin:0 9px;background-color:#25272C;}

header{
    position: fixed;
    top: 0;
    z-index: 1400;
    height: 4.4rem;
    width:100%;
    background-color: #25272C;
    backdrop-filter: blur(2rem);
}
 header a {
        color: #fcfcfc;
            text-decoration: none;

}
.nav-list{
    list-style:none;
    display:flex;
    align-items:center;
    justify-content: space-between;
    margin: 0 -1rem;
}
.nav-list-mobile{
    display:none;
}
.nav-link{
    font-size: 1.4rem;
    color: #fff;
    padding: 0 1rem;
    transition: opacity .5s;

}
.nav-link:hover{
    opacity: .7;

}
tbody>tr>:nth-child(1){
 color:red;
 width:1px;
 text-align:center;
}

.nav-link-apple{
    width: 2.2rem;
    height: 4.4rem;
    background: url("/images/smalltmafe.png") center no-repeat;

}
@media screen and (max-width: 767px){
	header {
		height: 4.8rem;
		transition: background .36s cubic-bezier(0.32,0.08,0.24,1),
					height .56s cubic-bezier(0.32,0.08,0.24,1);
	}
	header .container{
		padding: 0;
	}
	.nav-list-larger{
		display: none;
	}
	.nav-list{
		margin-top: 0;
	}
	.nav-list-mobile{
		display: flex;
	}
	.nav-item{
		width: 4.8rem;
		height: 4.8rem;
		display: flex;
		justify-content: center;
	}
	.nav-item-hidden{
		display: none;
	}
	.mobile-menu{
		position: relative;
		z-index: 1500;
		width: 100%;
		height: 100%;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		cursor: pointer;
    }
    .line{
        position: absolute;
        width: 1.7rem;
        height: 1px;
        background-color: #fff;
        transition: margin-top .3192s cubic-bezier (0.04,0.04,0.12,0.96);
    }
    .line-top{
        margin-top: 3px;
    }
    .line-bottom{
        margin-top: -.4rem;
    }
    .active .line-top{
        margin-top: 0;
        transform: rotate(45deg);
        transition: transform .3192s .1s cubic-bezier (0.04,0.04,0.12,0.96);
    }
    .active .line-bottom{
        margin-top: 0;
        transform: rotate(-45deg);
        transition: transform .3192s .1s cubic-bezier (0.04,0.04,0.12,0.96);
    }
    header.active{
        height: 100%;
        background-color: #25272C;
    }
    .nav-link-apple{
        width: 4.2rem;
        height: 4.4rem;
        position: relative;
        z-index: 1500;
    }
    .nav-link-bag{
        width: 0.2rem;
        height: 10.8rem;
        transition: opacity 3s;
    }
    .nav{
        position: relative;
    }
    .nav-link{
        font-size: 1.7rem;
        padding: 0;
        margin: auto 0;
    }
    .nav-list-larger{
        position: fixed;
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        display: block;
        padding: 10.5rem 5rem;
        z-index: 1000;
        box-sizing: border-box;
        opacity: 0;
        visibility: hidden;
        transition: opacity .3s;
    }
    .active .nav-link-bag{
        opacity: 0;
        transition: opacity .3s;
    }
    .active .nav-list-larger{
        width: 100%;
        height: 100vh;
        opacity: 1;
        visibility: visible;
    }
    .nav-list-larger .nav-item{
        width: 100%;
        justify-content: flex-start;
        border-bottom: 2px solid rgba(255,255,255,.1);
    }
    .active .nav-list-larger .nav-item{
        animation: fadeIn 1s ease-in;
    }
    @keyframes fadeIn{
        from{
            opacity: 0;
        }
        to{
            opacity: 1;
        }
    }
}
body {
background-color: #36393F;
color:white;
    font-family:Georgia, "Times New Roman", Times, serif;
}
input[type="submit"] {
	background-color: #36393F;
	padding: .5em;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 6px;
	color: #fff;
	font-family: 'Times New Roman';
	font-size: 100%;
	text-decoration: none;
	border: none;
}
input[type="text"] {
	background-color: #36393F;
	padding: .5em;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 6px;
	color: #fff;
	font-family: 'Times New Roman';
	font-size: 100%;
	text-decoration: none;
	border: none;
}
button {
	background-color: #36393F;
	padding: .5em;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 6px;
	color: #fff;
	font-family: 'Times New Roman';
	font-size: 100%;
	text-decoration: none;
	border: none;
}
.buttonHolder{ 
    text-align: center; 
    
}
input[type="file"] {
	background-color: #36393F;
	padding: .5em;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 6px;
	color: #fff;
	font-family: 'Times New Roman';
	font-size: 100%;
	text-decoration: none;
	border: none;
}
input[type="submit"]:hover {
    border: none;
	background: #496066;
	box-shadow: 0px 0px 1px #777;
}
input[type="file"]:hover {
    border: none;
	background: #496066;
	box-shadow: 0px 0px 1px #777;
}
button:hover {
    border: none;
	background: #496066;
	box-shadow: 0px 0px 1px #777;
}
input[type="text"]:hover {
    border: none;
	background: #496066;
	box-shadow: 0px 0px 1px #777;
}
.submit {
	background-color: #496066;
	padding: .5em;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 6px;
	color: #27292F;
	font-family: 'Times New Roman';
	font-size: 20px;
	text-decoration: none;
	border: none;
}
.submit:hover {
	border: none;
	background: lightslategray;
	box-shadow: 0px 0px 1px #777;
}
	/*  links
	******************************/
	a {color: #fcfcfc;text-decoration: underline;}
	a:hover {color: #fcfcfc;text-decoration: none;}
/* testing stage
.navigation{
	margin:0px 0px 25px;
	border-bottom:#adb1b2 solid 1px;
	padding:15px 5px;
	background: 36393f;
}

.navigation ul{
	margin:0px;
	padding:0px;
}

.navigation ul li{
	margin:0px;
	padding:0px 32px;
	display:inline;
	font-size:15px;
	list-style-type:none;
	border-right:#868B8F dotted 2px;
}

.navigation ul li a{
	color:#fcfcfc;
	text-decoration:none;
}

.navigation ul li a:hover{
	text-decoration:underline;
}

.navigation ul li:last-child {
	border-right:none;
}
/*----end header----*/


/*----start page content----*/
#page_content{
	background:#25272C;
	padding:10px;
}

#page_content .right_section{
	width:735px;
	float:right;
}

#page_content .right_section .top_content{
	padding:15px 0 0px 0;
}

#page_content .right_section .top_content .column_one{
	width:300px;
	float:left;
	margin-bottom:20px;
    
}
#page_content .right_section  li ul a {
    color:#fcfcfc;
    text-decoration:underline;
    
}

#page_content .right_section .top_content .column_two{
	width:300px;
	float:right;
	margin-bottom:20px;
}

.common_content{
	padding:0 0 20px 0;
}

.border_left{
	border-left:#6e7678 dotted 1px;
	padding-left:20px;
}

.border_none{
	border:none!important;
	margin:0px!important;
}

.left_side_bar{
	width:210px;
	margin-bottom:10px;
    margin-right:15px;
	float:left;
}

.left_side_bar h1{
	font-size:18px;
	padding:0 0 0 35px;
	margin-bottom:15px;
	color:#fcfcfc;
	background:url(../images/pencil.png) no-repeat 10px center;
}

.left_side_bar .col_1{
	padding:0px 0 20px 0;
}

.left_side_bar .col_1 .box{
	padding:10px 15px 5px;
	border:#A1A9AB solid 2px;
}

.left_side_bar .col_1 .box ul{
	margin:0px;
	padding:0px;
}

.left_side_bar .col_1 .box ul li{
	margin:0px 0px 8px;
	padding:0px 0px 0px 20px;
	font-size:13px;
	list-style-type:none;
	background:url(../images/li.png) no-repeat left center;
}

.left_side_bar .col_1 .box ul li a{
	color:#fcfcfc;
	text-decoration:underline;
}


.left_side_bar .col_1 .box ul li a:hover{
	color:#fcfcfc;
	text-decoration:none;
}
/*----end page content----*/


/*----start footer content----*/
#footer{
	clear:both;
	margin-top:18px;
	padding:15px 0 12px 0;
	height:25px;
	text-align:center;
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	line-height:19px;
	border-top:#b9bdbe solid 1px;
}

#footer a{
	color: #fcfcfc;
	text-decoration:none;
}

#footer a:hover{
	color: #fcfcfc;
	text-decoration:underline;
}
.center1{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
/*----end footer content----*/

</style>

<script type="text/javascript">
<!--
var _c1='#fff'; var _c2='#fff'; var _ppg=5000; var _cpg=1; var _files=[]; var _dirs=[]; var _tpg=null; var _tsize=0; var _sort='date'; var _sdir={'type':0,'name':0,'size':0,'date':1}; var idx=null; var tbl=null;
function _obj(s){return document.getElementById(s);}
function _ge(n){n=n.substr(n.lastIndexOf('.')+1);return n.toLowerCase();}
function _nf(n,p){if(p>=0){var t=Math.pow(10,p);return Math.round(n*t)/t;}}
function _s(v,u){if(!u)u='B';if(v>1024&&u=='B')return _s(v/1024,'KB');if(v>1024&&u=='KB')return _s(v/1024,'MB');if(v>1024&&u=='MB')return _s(v/1024,'GB');return _nf(v,1)+'&nbsp;'+u;}
function _f(name,size,date,url,rdate){_files[_files.length]={'dir':0,'name':name,'size':size,'date':date,'type':_ge(name),'url':url,'rdate':rdate,'icon':'<?php print$self?>?icon='+_ge(name)};_tsize+=size;}
function _d(name,date,url){_dirs[_dirs.length]={'dir':1,'name':name,'date':date,'url':url,'icon':'<?php print$self?>?icon=dir'};}
function _np(){_cpg++;_tbl();}
function _pp(){_cpg--;_tbl();}
function _sa(l,r){return(l['size']==r['size'])?0:(l['size']>r['size']?1:-1);}
function _sb(l,r){return(l['type']==r['type'])?0:(l['type']>r['type']?1:-1);}
function _sc(l,r){return(l['rdate']==r['rdate'])?0:(l['rdate']>r['rdate']?1:-1);}
function _sd(l,r){var a=l['name'].toLowerCase();var b=r['name'].toLowerCase();return(a==b)?0:(a>b?1:-1);}
function _srt(c){switch(c){case'type':_sort='type';_files.sort(_sb);if(_sdir['type'])_files.reverse();break;case'name':_sort='name';_files.sort(_sd);if(_sdir['name'])_files.reverse();break;case'size':_sort='size';_files.sort(_sa);if(_sdir['size'])_files.reverse();break;case'date':_sort='date';_files.sort(_sc);if(_sdir['date'])_files.reverse();break;}_sdir[c]=!_sdir[c];_obj('sort_type').style.fontStyle=(c=='type'?'italic':'normal');_obj('sort_name').style.fontStyle=(c=='name'?'italic':'normal');_obj('sort_size').style.fontStyle=(c=='size'?'italic':'normal');_obj('sort_date').style.fontStyle=(c=='date'?'italic':'normal');_tbl();return false;}

function _head()
{
	if(!idx)return;
	_tpg=Math.ceil((_files.length+_dirs.length)/_ppg);
	idx.innerHTML='<div class="rounded gray" style="padding:5px 10px 5px 7px;color:#202020">' +
		'<p class="left">' +
			'<strong><?php print$current_dir_name==''?$sitename:$current_dir_name?></strong><?php print$dir!=''?'&nbsp; (<a href="'.$up_url.'">Back</a>)':''?><br />' + (_files.length+_dirs.length) + ' characters in this folder.' +
		'</p>' +
		'<p class="right">' +
			'Sort: <span class="link" onmousedown="return _srt(\'name\');" id="sort_name">Name</span>, <span class="link" onmousedown="return _srt(\'type\');" id="sort_type">Type</span>, <span class="link" onmousedown="return _srt(\'size\');" id="sort_size">Size</span>, <span class="link" onmousedown="return _srt(\'date\');" id="sort_date">Date</span>' +
		'</p>' +
		'<div style="clear:both;"></div>' +
	'</div><div id="idx_tbl"></div>';
	tbl=_obj('idx_tbl');
}

function _tbl()
{
	var _cnt=_dirs.concat(_files);if(!tbl)return;if(_cpg>_tpg){_cpg=_tpg;return;}else if(_cpg<1){_cpg=1;return;}var a=(_cpg-1)*_ppg;var b=_cpg*_ppg;var j=0;var html='';
	if(_tpg>1)html+='<p style="font-size:200%;padding:5px 5px 0px 7px;color:#202020;text-align:right;"><span class="link" onmousedown="_pp();return false;">Previous</span> ('+_cpg+'/'+_tpg+') <span class="link" onmousedown="_np();return false;">Next</span></p>';
	html+='<table cellspacing="0" cellpadding="5" border="0">';
	for(var i=a;i<b&&i<(_files.length+_dirs.length);++i)
	{
		var f=_cnt[i];var rc=j++&1?_c1:_c2;
		html+='<tr style="background-color:'+rc+'"><td><img src="'+f['icon']+'" alt="" /> &nbsp;<a href="'+f['url']+'">'+f['name']+'</a></td><td class="center" style="width:50px;">'+(f['dir']?'':_s(f['size']))+'</td><td class="center" style="width:70px;">'+f['date']+'</td></tr>';
	}
	tbl.innerHTML=html+'</table>';
}
<?php foreach($dirs as $d) { print sprintf("_d('%s','%s','%s');\n",addslashes($d['name']),date($date,$d['date']),addslashes($d['url'])); } ?>
<?php foreach($files as $f) { print sprintf("_f('%s',%d,'%s','%s',%d);\n",addslashes($f['name']),$f['size'],date($date,$f['date']),addslashes($f['url']),$f['date']); } ?>

window.onload=function()
{ // CUSTOM SORTING HERE
	idx=_obj('idx'); _head(); _srt('name');
};
-->
</script>
</head>
	<body>
    		<title>Classic MS Agents Directory</title>
	<header>
    <div class="container">
        <nav class="nav">
            <ul class="nav-list nav-list-mobile">
                <li class="nav-item">
                    <div class="mobile-menu">
                        <span class="line line-top"></span>
                        <span class="line line-bottom"></span>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link nav-link-apple" ></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-bag" ></a>
       
            </ul>

            <ul class="nav-list nav-list-larger">
                <li class="nav-item nav-item-hidden">
                    <a href="/" class="nav-link nav-link-apple" ></a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/products" class="nav-link" >Products</a>
                </li>
                        <li><a class="nav-link" href="/download-center">Download Center</a></li>
                <li class="nav-item">
                    <a href="/packs" class="nav-link" >Packs</a>
                </li>
                <li class="nav-item">
                    <a href="/upload" class="nav-link" >Upload</a>
                </li>
                					<li class="nav-item">
						<a href="#" class="nav-link" ></a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" ></a>
					</li>

                                <li class="nav-item nav-item-hidden">
                    <a href="#" class="nav-link nav-link-search" ></a>
                </li>
                <li class="nav-item nav-item-hidden">
                    <a href="#" class="nav-link nav-link-bag" ></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<br>
<br>
<br>
<h1 style="text-align: center;">Classic MS Agents Directory&nbsp;</h1>
	<div id="idx"><!-- do not remove --></div>
</body>
</html>

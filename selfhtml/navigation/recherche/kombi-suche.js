// Engin de recherche en Javascript, version SH-8-4-fr (18.1.03)
// adapt� pour Selfhtml 8.0
// Auteur: Oliver Garc�a
//
// Ce programme est prot�g� par des droits d'auteur. Au cas o� vous seriez //int�ress� par l'acquisition d'une version de ce programme de recherche adapt�e //� vos bases de donn�es, vous pouvez obtenir plus d'informations en �crivant � //:moteur-de-recherche@ogu.de


kapitelgrafik="src/refchap.gif\""
dokumentgrafik="src/doc.gif\""
Zugriff_verweigert="Acc�s refus�"
Domain_Problem="Une erreur est survenue:\n\nLe cadre du bas ne fait pas partie du m�me domaine que le moteur de recherche. Vous avez deux possibilit�s pour pallier l'erreur:\n\nSoit vous revenez en arri�re avec le bouton page pr�c�dente jusqu'� ce que le cadre du bas affiche � nouveau une page Selfhtml\n\nsoit\n\nVous rechargez le moteur de recherches en activant la ligne d'adresse avec la souris et en validant avec la touche \"Entr�e\"\n\nCette erreur survient la plupart du temps quand vous actionnez le bouton \"marquer les occurrences\", avant m�me que la page soit compl�tement charg�e."
Allgemeiner_Fehler1="Une erreur est survenue, dont la notification est la suivante:\n\n"
Allgemeiner_Fehler2="\n\nQuand cette erreur survient fr�quemment, veuillez la signaler en mentionnant le message d'erreur et les circonstances dans lesquelles elle est survenue � l'adresse �lectronique suivante: moteur-de-recherche@ogu.de"
Phrasensuche_Wort="recherche de phrase"
Treffer_Wort="occurrences"
Ergebnisse_Wort="r�sultats"
Suche_abgeschlossen_Txt="Recherche termin�e"
Suchen_Wort="Rechercher"
Treffer_markieren_Txt="Marquer les occurrences"
Treffer_markieren_Title_Txt="Cliquez ici apr�s l'appel de page pour marquer les occurrences dans le document trouv�"
Es_wurde_keine_Seite_gef_Txt="<p>Il n'y a aucune page pr�sentant des occurrences."
Es_wurde_keine_weitere_Seite_gef_Txt="<p>Il n'y a aucune autre page avec des occurrences."
weitere_Txt="autres "
Suche_abgeschlossen_Txt="La recherche est termin�e"
Vorherige_Wort="pr�c�dentes "
Kein_Suchbegriff_Txt="Il faut entrer au moins un terme positif � rechercher"
oder_Wort="ou"
und_Wort="et"
nicht_vorkommen_Txt="n'apparaissent pas"
nicht_vorkommt_Txt="n'appara�t pas"
Suche_nach_Txt="Vous avez recherch�"
Inkompatibler_Browser_Txt="Attention: ce moteur de recherche n'est malheureusement pas compatible avec votre navigateur. Veuillez utiliser la recherche en ligne."
Suche_laeuft_Txt="Recherche en cours..."
Mindestens_ein_Zeichen_Txt="Il faut entrer au moins un caract�re."
Bitte_warten_Txt="veuillez patienter"
Suche_bitte_warten_Txt="recherche en cours, veuillez patienter"
Einstellungen_ab_naechste_Suche_gueltig_Txt="Les options choisies entreront en vigueur lors de la prochaine recherche"
Seiten_in_denen_dieser_Ausdruck_vorkommt_Txt="pages dans lesquelles cette expression appara�t "
Wortanfangsuche_Wort="recherche en d�but de mots"
Seiten_in_denen_mindestens_einer_der_Txt="pages dans lesquelles au moins une des "
beiden_Wort="deux"
beide_Wort="toutes les deux"
ausdruecke_vorkommt_Txt=" expressions appara�t "
ausdruecke_vorkommen_Txt=" expressions apparaissent "
zsg_ausdruck_vorkommt_Txt="&raquo;<BR>(pages dans lesquelles cette expression compos�e appara�t "
Seiten_in_denen_Txt="pages dans lesquelles "
Wortanfaenge_Txt=" - recherche en d�but de mots)"
alle_Wort="tous les "
exakte_Suche_Txt=" - recherche exacte)"
Hilfe_Wort="Aide"
Cookie_Name="Selfhtml8"

archiv = "../../"
ie4 = (document.all)? true:false
ie5 = ((document.getElementById) && (document.all))
nc4 = (document.layers)? true:false
nc45 = (nc4 && navigator.appVersion.substr(2).match(/^[1-9]|^0[5-9]/))? true:false
mz5 = ((document.getElementById) && (!document.all) && (document.documentElement))
ie4mz = (ie4 || mz5)
zeigedetails=true
bildschirm=50
bunt=0
aktiv= new Array()
for (x=0; x<i.length; x++) aktiv[x]=(i[x] ? true : false)
aktuellerindex=1
interneansicht=0
oeffnen=0
vordatei=""
f1="<B>"
f2="</B>"
farbe = new Array("#FCE463","#FFA500","#D2B48C","#66CDAA","#8FBC8F")
if (nc45 && top.window.name.match(/0s$/)) window.setTimeout("Konfigurieren()",500)

if (document.cookie) {
        cook=document.cookie
        if (cook.indexOf(Cookie_Name+"=")>-1) {
                cook=cook.substr(cook.indexOf(Cookie_Name+"=")+10)
                cook=cook.replace(/;.*/,"")
                ck=cook.split("_")
                ck2=ck[0].split("+")
                aktiv= new Array()
                for (x=0; x<ck2.length-1; x++) {
                        aktiv[ck2[x].split("-")[0]]=(i[ck2[x].split("-")[0]] && parseInt(ck2[x].split("-")[1]))
                }
                abfolge()
                zeigedetails=(ck[0] == 1)
                bildschirm=parseInt(ck[1])
                oeffnen=parseInt(ck[2])
                if (parseInt(ck[3]) == 0) {
                        f1=""
                        f2=""
                }
                if (ie4mz) bunt=parseInt(ck[4])
                if (isNaN(bunt)) bunt=0
        }
}

window.onerror = Fehler

function Fehler(Nachricht,Datei,Zeile) {
        meinFehler = Nachricht+"\n"+Datei+"\n"+Zeile
        if (ie4 && Nachricht == Zugriff_verweigert) {
                alert(Domain_Problem)
        }
        else {
                alert(Allgemeiner_Fehler1+meinFehler+Allgemeiner_Fehler2)
        }
        return true
}

function datei(temp,ang,ue,det,l,l2) {
        det=""
        if ((zeigedetails && !(exkt && !oder_s)) || zsg) {
                if (!indokg[temp]) indokg[temp]=indok[temp].replace(/#$/,"").replace(/~|#/g,", ")
                if (indokg[temp]!="") {
                        if (zsg && !exkt) det=" ("+indokg[temp].small()+")"
                        else det=" ("+indokg[temp].italics().small()+")"
                }
        }
        alttemp=temp
        titel = new Array()
        titel[1]=parent.d[parent.dz[temp]].split("*")[1]
        if (!parent.dz[temp]) return ""
        uurl=url(parent.dz[temp])
        if (!ang) ang=""
        if (ue) ue="<P><U>"+ue.italics()+"</U><P>"
        else ue=""
        l2=""
        if (oeffnen==2) l2=" target=\"_blank\""
        if (oeffnen==1) l2=" target=\"_Ergebnisse\""

        einruecken=""
        einruecken+=vordatei
        vordatei=""
        ausruecken=""
        tr=parent.dz[temp].split("-")
        tr2=""
        ebausr=0
        for (x=0; x<tr.length-1; x++) {
                tr2+="-"+tr[x]
                tr3=tr2.substr(1)
                abstand=""
                if (x==0 || (x==1 && eb[x])) {
                        abstand=" style=\"margin-top:1em;\""
                }
                if (tr3!=eb[x])  {
                        if (x==0) eb= new Array()
                        if (itext[tr3]) {
                                einruecken+=aausruecken+dts()+"<dd><dl><dt"+abstand+">"+img(1)+"<A HREF=\""+archiv+itext[tr3].split("@")[1]+"\""+l2+">"+f1+parent.d[tr3].split("*")[1]+f2+"</A>"+itext[tr3].split("@")[0]
                        }
                        else einruecken+=dts()+"<dd><dl><dt"+abstand+">"+img(1)+f1+parent.d[tr3].split("*")[1]+f2
                        dt++
                }
                else altebausr--
                aausruecken=""
                eb[x]=tr3
                ebausr++
        }
        for (x=tr.length; x<7; x++) {
                eb[x]=""
        }
        while (altebausr>0) {
                ausruecken+="</dl></dd>"
                altebausr--
        }
        l="<A HREF=\""+archiv+uurl+"\""+l2+">"+f1+titel[1].replace(/^SELFHTML: /,"")+f2+"</A>"
        altebausr=ebausr
        vordatei=""
        if (parent.dz[temp].split("-").length<3) {
                itext[parent.dz[temp]]=det+"@"+uurl
                aausruecken=ausruecken
                if (parent.dz[z[ergebniszaehler+1]] && !parent.dz[z[ergebniszaehler+1]].indexOf(parent.dz[temp])) {
                        if (tr.length == 1) return einruecken
                        return ausruecken+einruecken
                }
        }
        trl=tr.length
        if (trl > 1 && parent.d[parent.dz[temp]+"-0"]) trl=1
        return ue+ausruecken+einruecken+dts()+"<dd><dl><dt>"+img(trl)+l+det+"</dt></dl></dd>"+ang
}

function dts() {
        if (dt>0) {
                dt--
                return "</dt>"
        }
        else return ""
}

function img(temp) {
        if (temp==1) return "<img src=\""+archiv+kapitelgrafik+" width=16 height=13 border=0 alt=\"\">&nbsp;"
        return "<img src=\""+archiv+dokumentgrafik+" width=15 height=10 border=0 alt=\"\">&nbsp;"
}

function url(temp,temp2,temp3) {
        temp2=parent.d[temp].split("*")[0]
        if (temp=="undefined") return ""
        if (temp2.indexOf("#") == 0) {
                temp3=temp.replace(/-[^-]*$/,"")
                temp2=url(temp3)+temp2
        }
        else if (!temp2.match(/^\|/)) {
                temp3=temp.replace(/-[^-]*$/,"")
                if (parent.d[temp3+"-0"].split("*")[0]) {
                        temp2=url(temp3+"-0")+temp2
                }
                else {
                        temp2=url(temp3)+temp2
                }
        }
        return temp2.replace(/^\|/,"")
}

function RF_a(temp,x,treffer,suchein) {
        if (indokg[temp]) return 1
        window.defaultStatus = Phrasensuche_Wort+" ("+(ergebniszaehler+1)+")"
        indok=new Array()
        such2=new Array()
        such3=new Array()
        for (uz=0; uz<und.length; uz++) {
                bs=af[und[uz]].split(",")
                for (aff in bs) {
                        suchein="+"+parent.w[bs[aff]]+"+"
                        ssin="/\\+"+temp+"-[^+]*/g"
                        sserg=escape(suchein).match(eval(ssin))
                        if (sserg) {
                                such2[uz]=sserg[0].substr(sserg[0].indexOf("-")+1)
                                stl=such2[uz].split("-")
                                x=und.length-uz
                                for (ss3=0; ss3<stl.length; ss3++) {
                                        x+=parseInt(stl[ss3])
                                        such3[x]=(such3[x] ? such3[x]+" " : " ")+bs[aff]
                                }
                        }
                }
        }
        such4=new Array()
        for (d in such3) {
                if ((such3[d]+" ").match(/ /g).length==und.length+1) {
                        vh=such3[d].substr(1)
                        such4[vh]=(such4[vh] ? such4[vh]+1 : 1)
                }
        }
        treffer=""
        for (d in such4) {
                treffer+=" "+und_Wort+" "+html(d).italics()
                if (such4[d]>1) treffer+=" - "+such4[d]+" "+Treffer_Wort+" -"
        }
        if (treffer>"") {
                indok[temp]=treffer.substr(und_Wort.length+2)
                return 1
        }
        return 0
}

function RF(temp,x,treffer,suchein) {
        if (indokg[temp]) return 1
        window.defaultStatus = Phrasensuche_Wort+" ("+(ergebniszaehler+1)+")"
        indok=new Array()
        such2=new Array()
        such3=new Array()
        for (uz=0; uz<und.length; uz++) {
                suchein="+"+parent.w[und[uz]]+"+"
                ssin="/\\+"+temp+"-[^+]*/g"
                sserg=escape(suchein).match(eval(ssin))
                if (sserg) stl=sserg[0].substr(sserg[0].indexOf("-")+1).split("-")
                else return 0
                x=und.length-uz
                for (ss3=0; ss3<stl.length; ss3++) {
                        x+=parseInt(stl[ss3])
                        such3[x]=(such3[x] ? such3[x]+"" : "")+"-"
                }
        }
        treffer=0
        for (x in such3) if (such3[x].length==und.length) treffer++
        if (treffer>1) indok[temp]=treffer+" "+Treffer_Wort
        else if (treffer>0) indok[temp]=""
        return treffer
}

function Numsort(a,b) {
        return a-b
}

function vgl(temp,rw) {
        tl=temp.split(",")
        d1=new Array()
        for (tx in tl) {
                if (!parent.w[tl[tx]]) return "---"
                else {
                        tl[tx]=escape(parent.w[tl[tx]]).replace(/-[^+]*/g,"")
                        d2 = tl[tx].split("+")
                        for (d3 in d2) d1[d2[d3]]=(d1[d2[d3]] ? d1[d2[d3]] : "")+"-"
                }
        }
        var rueckgabe=""
        if (rw==1) {
                for (x in d1) if (d1[x].length==tl.length) rueckgabe=","+x+rueckgabe
        }
        else {
                for (x in d1) if (d1[x].length==tl.length) rueckgabe+=","+x
        }
        if (rueckgabe>"") return rueckgabe.substr(1)
        else return "---"
}

function kleiner(temp,x,k) {
        x=-1
        tl=temp.split(",")
        d1=new Array()
        as=new Array()
        for (tx in tl) {
                tl[tx]=tl[tx].replace(/^-/,"")
                for (aff in parent.w) {
                        if (String(aff).indexOf(tl[tx])==0) af[tl[tx]]=(af[tl[tx]] ? af[tl[tx]] : "")+","+aff
                }
                if (af[tl[tx]]) af[tl[tx]]=af[tl[tx]].substr(1)
                else return "---"
                x++
                bs=af[tl[tx]].split(",")
                as[tl[tx]]=""
                for (aff in bs) as[tl[tx]]+="+"+escape(exakt(bs[aff])).replace(/-[^+]*/g,"")
        }
        va=""
        for (x in as) if (va=="" || as[x].length<va.length) {
                va=as[x]
                k=x
        }
        return "/\\+("+va.substr(1).replace(/\+/g,"|")+")-/g"
}

function vgl_a_d(temp,x,f,d,y,va,kl,zaehler,ri) {
        indok=new Array()
        tl=temp.split(",")
        kl=kleiner(temp)
        if (kl == "---") return "---"
        zaehler=2
        for (x in tl) {
                for (f in parent.w) {
                        if (String(f).indexOf(tl[x])==0) {
                                ds=escape(parent.w[f]).replace(/-[^+]*/g,"")
                                if (kl.length<4000) {
                                        vat=("+"+ds+"+").replace(/\+/g,"-+").match(eval(kl))
                                        if (vat) ds=vat.join("").replace(/-\+/g,"+").replace(/^\+/g,"").replace(/-$/g,"")
                                        else continue
                                }
                                d=ds.split("+")
                                for (y in d) {
                                        indok[d[y]]=(indok[d[y]] ? indok[d[y]] : "")+html(f)+"~"
                                }
                        }
                }
                for (y in indok) indok[y]=indok[y].replace(/~$/,"#")
        }
        rueckgabe=new Array()
        ri=0
        for (y in indok) {
                if (indok[y].split("#").length==und.length+1) {
                        rueckgabe[ri++]=y
                }
        }
        rueckgabe.sort(Numsort)
        if (ri>0) return rueckgabe.join(",")
        else return "---"
}

function vgl_a(temp,tmp2,k,tmp3,x) {
        x=-1
        tl=temp.split(",")
        d1=new Array()
        as=new Array()
        for (tx in tl) {
                tl[tx]=tl[tx].replace(/^-/,"")
                if (!af[tl[tx]]) {
                        for (aff in parent.w) if (String(aff).indexOf(tl[tx])==0) {
                                af[tl[tx]]=(af[tl[tx]] ? af[tl[tx]] : "")+","+aff
                        }
                        if (af[tl[tx]]) {
                                af[tl[tx]]=af[tl[tx]].substr(1)
                        }
                        else return "---"
                        x++
                }
                bs=af[tl[tx]].split(",")
                as[tl[tx]]=""
                for (aff in bs) as[tl[tx]]+="+"+escape(exakt(bs[aff])).replace(/-[^+]*/g,"")
                as[tl[tx]]+="+"
        }
        va=""
        for (x in as) if (va=="" || as[x].length<va.length) {
                va=as[x]
                k=x
        }
        va=va.substr(1)
        as[k]=""
        va2=va.split("+")
        var rueckgabe=""
        enth=false
        for (x in va2) {
                if (va2[x] == "") continue
                enth=true
                for (y in as) {
                        if (as[y] == "") continue
                        if (as[y].indexOf("+"+va2[x]+"+") == -1) {
                                enth=false
                                break
                        }
                }
                if (enth) rueckgabe=rueckgabe+","+va2[x]
        }
        tmp3=rueckgabe.substr(1).split(",").sort(Numsort)
        rueckgabe=""
        for (x in tmp3) {
                if (tmp2==tmp3[x]) continue
                rueckgabe+=","+tmp3[x]
                tmp2=tmp3[x]
        }
        rueckgabe=rueckgabe.substr(1)
        if (rueckgabe>"") return rueckgabe
        else return "---"
}

function oder(temp,suchenach,tmp2,k,tmp3) {
        indok=new Array()
        var x=-1
        var zz5=0
        od=new Array()
        as=new Array()
        for (tx in temp) {
                if (parent.w[temp[tx]]) {
                        tmp2=escape(parent.w[temp[tx]]).replace(/-[^+]*/g,"")
                        tmp3=tmp2.split("+")
                        for (x in tmp3) {
                                indok[tmp3[x]]=(indok[tmp3[x]] ? indok[tmp3[x]] : "")+html(unescape(temp[tx]))+"~"
                        }
                }
        }
        rueckgabe=new Array()
        ri=0
        for (y in indok) {
                rueckgabe[ri++]=y
                indok[y]=indok[y].replace(/~$/,"")
        }
        rueckgabe.sort(Numsort)
        if (ri>0) return rueckgabe.join(",")
        else return "---"
}

function ls(a,b) {
        return b.split(" ").length-a.split(" ").length
}

function n(temp) {
        while (temp.length<3) temp="0"+temp
        return temp
}

function oder_a_d(temp,x,f,d,y,ri) {
        indok=new Array()
        tl=temp.split(",")
        for (x in tl) {
                for (f in parent.w) {
                        if (String(f).indexOf(tl[x])==0) {
                                ds=escape(parent.w[f]).replace(/-[^+]*/g,"")
                                d=ds.split("+")
                                for (y in d) {
                                        indok[d[y]]=(indok[d[y]] ? indok[d[y]] : "")+html(f)+"~"
                                }
                        }
                }
                for (y in indok) indok[y]=indok[y].replace(/~$/,"#")
        }
        rueckgabe=new Array()
        ri=0
        for (y in indok) {
                if (indok[y].split("#").length>0) {
                        rueckgabe[ri++]=y
                }
        }
        rueckgabe.sort(Numsort)
        if (ri>0) return rueckgabe.join(",")
        else return "---"
}

function oder_a(temp,kurz,tmp2,tmp3,x) {
        x=-1
        tl=temp.split(",")
        d1=new Array()
        as=new Array()
        var o_a=""
        for (tx in tl) if (!as[tl[tx]]) for (aff in parent.w) {
                if (String(aff).indexOf(tl[tx])==0) {
                        o_a+="+"+escape(parent.w[aff]).replace(/-[^+]*/g,"")
                }
        }
        if (kurz) return o_a+"+"
        if (o_a=="") return "---"
        tmp3=o_a.substr(1).split("+")
        tmp3.sort(Numsort)
        rueckgabe=""
        for (x in tmp3) {
                if (tmp2==tmp3[x]) continue
                rueckgabe+=","+tmp3[x]
                tmp2=tmp3[x]
        }
        return rueckgabe.substr(1)
}

function oder_e(temp) {
        var x=-1
        tl=temp.split(",")
        var o_a=""
        for (tx in tl) o_a+="+"+escape(exakt(tl[tx])).replace(/-[^+]*/g,"")
        return o_a+"+"
}

function exakt(temp) {
        if (parent.w[temp]) return parent.w[temp]
        else return "---"
}

function Dateikopf() {
        if (nc4) document.Suchfeld.Absendeknopf.blur()
        with (parent.frames['Anzeige'].document) {
                writeln("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">\n<html><head>")
                writeln("<meta http-equiv=\"content-type\" content=\"text/html; charset=ISO-8859-1\">")
                writeln("<link rel=\"stylesheet\" type=\"text/css\" href=\"../../src/selfhtml.css\">")
                writeln("<style type=\"text/css\">")
                writeln("<!--")
                if (ie4mz) { writeln("p,dt,dd,ol,li        {  font-size: 3.5mm;") }
                if (nc4) writeln("p,dl,dt,dd,ol,li        {  font-size: small;")
                if (mz5) writeln("        line-height: 125%;")
                else writeln("        line-height: 110%;")
                writeln("        font-family: Arial, Verdana;")
                writeln(" }")
                if (ie4) writeln("dt,dd { margin-left:4ex; margin-top:0.7mm; }")
                writeln("//-->")
                writeln("</style>")
                writeln("<title>"+Ergebnisse_Wort+"</title><!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//matomo.boitasite.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
</head>")
                sfc=""
                if (!mz5) sfc=" onload=\"self.focus()\""
                writeln("<body bgcolor=\"#FFFFFF\" text=\"#000000\" link=\"#AA5522\" vlink=\"#772200\" alink=\"#000000\""+sfc+">")
        }
}

function Dateifuss() {
        var temp=""
        window.defaultStatus = Suche_abgeschlossen_Txt
        window.setTimeout("window.defaultStatus = ''",2000)
        var sf="<input LANGUAGE='JavaScript' type=button onClick='Pruefe()' value='"+Suchen_Wort+"'>"
        if (!ngf) sf+="&nbsp;<input type=button onClick=\"Aendern(und[0]+'|'+und[1])\" value=\""+Treffer_markieren_Txt+"\" title=\""+Treffer_markieren_Title_Txt+"\">"
        if (ie4mz) {
                if (ie4 && !ie5) document.all.Einblenden_ausblenden.innerHTML=sf
                else document.getElementById("Einblenden_ausblenden").innerHTML=sf
        }
        ausruecken=""
        while (altebausr>0) {
                ausruecken+=dts()+"</dl></dd>"
                altebausr--
        }
        ausruecken+="</dl>"
        with (parent.frames['Anzeige'].document) {
                if (ngf) {
                        if (zngf) writeln(Es_wurde_keine_weitere_Seite_gef_Txt)
                        else writeln(Es_wurde_keine_Seite_gef_Txt)
                }
                fc="<p>&nbsp;\n</body></html>"
                if (zwischenergebnis) writeln(ausruecken+temp+"<p align=center><b><a href=\"javascript:parent.frames['Suche'].weiter("+(ergebniszaehler)+")\">"+weitere_Txt+Treffer_Wort+"</a></b>"+fc)
                else writeln(ausruecken+temp+"<p align=center><b>"+Suche_abgeschlossen_Txt+"</b>"+fc)
                close()
        }
        document.Suchfeld.Suchenach.blur()
        if (!nc45) parent.frames['x'].location.href="leer.htm"
        if (mz5) parent.frames['Anzeige'].focus()
}

function weiter(temp) {
        ergebniszaehler=temp
        seitenbeginn[seiteaktuell]=altergebniszaehler
        seiteaktuell++
        zeige(zwischenergebnisse,vorspann)
        parent.frames['x'].location.reload()
}

function zurueck(temp) {
        seiteaktuell=temp
        ergebniszaehler=seitenbeginn[seiteaktuell]
        zeige(zwischenergebnisse,vorspann)
}

function zeige(temp,text,zl) {
        zwischenergebnisse=temp
        vorspann=text
        if (text) Dateikopf()
        eb= new Array()
        altebausr=0
        zl=0
        ngf=0
        dt=0
        with (parent.frames['Anzeige'].document) {
                z=zwischenergebnisse.split(",")

                if (text) writeln("<TABLE WIDTH=\"100%\"><TR><TD ALIGN=\"left\" VALIGN=\"top\">"+text+"</TD><TD ALIGN=\"right\" VALIGN=\"top\"><img src=\""+archiv+dokumentgrafik+" width=\"15\" height=\"10\" border=\"0\" alt=\"\">&nbsp;<A HREF=\"unten.htm\">"+Hilfe_Wort+"</A></TD></TR></TABLE>")
                if (ergebniszaehler!=0) writeln("<p align=center><b><a href=\"javascript:parent.frames['Suche'].zurueck("+(seiteaktuell-1)+")\">"+Vorherige_Wort+bildschirm+" "+Treffer_Wort+"</a></b>")
                writeln("<dl>")
                while ((zwischenergebnisse=="---" || zwischenergebnisse=="") && nd[aktuellerindex+1]) {
                        zwischenergebnisse=nachladen()
                        if (zwischenergebnisse == "---") ngf=1
                }
                if (!ngf) {
                        temp=z.length
                        altergebniszaehler=ergebniszaehler
                        while (ergebniszaehler < temp && zl < bildschirm) {
                                if (z[ergebniszaehler].search(/^[0-9]*$/)==0) { // NC-Sonderbehandlung
                                        if (ohne0=="" || ohne1.indexOf("+"+z[ergebniszaehler]+"+")==-1) {
                                                if (!zsg || (exkt && RF(z[ergebniszaehler])>0) || (!exkt && RF_a(z[ergebniszaehler])>0)) {
                                                        writeln(datei(z[ergebniszaehler])+(interneansicht ? " "+(ergebniszaehler)+" ("+z[ergebniszaehler]+")" : ""))
                                                        zl++
                                                }
                                        }
                                }
                                ergebniszaehler++
                                if (ergebniszaehler == temp) {
                                        do {
                                                weitereergebnisse=nachladen()
                                        } while (weitereergebnisse=="---" && nd[aktuellerindex+1])
                                        if (weitereergebnisse == "---") break
                                        else {
                                                zwischenergebnisse+=","+weitereergebnisse
                                                z=zwischenergebnisse.split(",")
                                                temp=z.length
                                        }
                                }
                        }
                        if (zl==0) ngf=1
                }
                minus+=mmm
                mmm=0
                if (zwischenergebnis && ngf) zngf=1
                zwischenergebnis=0
                if (ergebniszaehler<temp) zwischenergebnis=1
                Dateifuss()
        }
}

function Suche(ausdruck0) {
        exkt=parent.frames['Suche'].document.Suchfeld.EXAKT[0].checked
        oder_s=parent.frames['Suche'].document.Suchfeld.UNDODER[1].checked
        ausdruck0=ausdruck0.replace(/%22/g,"\"").replace(/  +/g," ").replace(/("?) ("?)$/g,"$1$2").replace(/[,.;:!?]/g,"")
        zsg=ausdruck0.match(/-?"[^"]*"/g)
        ausdruck0=ausdruck0.replace(/-?"[^"]*"/g,"")
        und0=ausdruck0.split(" ")
        ohne0=""
        for (x in und0) {
                if (und0[x].indexOf("-")==0) {
                        ohne0+=","+und0[x].substr(1)
                }
                else {
                        und_++
                        und[und_]=und0[x]
                }
        }
        if (typeof und[0] == "undefined") return
        if (und.length==0) {
                alert(Kein_Suchbegriff_Txt)
                parent.frames['Suche'].document.Suchfeld.Suchenach.focus()
                return
        }
        if (ohne0>"") {
                if (exkt) ohne1=oder_e(ohne0.substr(1))
                else ohne1=oder_a(ohne0.substr(1),true)
        }
        var az = (zsg ? zsg.length : 0)+und.length
        if (ohne0>"") ohne_t=unescape(" "+und_Wort+" "+ohne0.replace(/,/g,"</B> "+oder_Wort+" <B>").substr(6+oder_Wort.length)+"</B> "+(ohne0.split(",").length>2 ? nicht_vorkommen_Txt : nicht_vorkommt_Txt))
        var zaehler1 = 0
        if (zsg) {
                zsg[0]=zsg[0].replace(/"/g,"")
                und = zsg[0].split(" ")
        }
        if (oder_s && !zsg) {
                var befehl=""
                for (x=0; x<und.length; x++) {
                        befehl=befehl+","+html(und[x].replace(/"/g,""))
                        suchenach+="</B> "+oder_Wort+" <B>"+html(und[x].replace(/"/g,""))
                }
                if (exkt) to=oder(und)
                else {
                        odera=1
                        if (zeigedetails) to=oder_a_d(und.join(","))
                        else to=oder_a(befehl.substr(1))
                }
                zeige(to,Suche_nach_Txt+": <b>"+suchenach.substr(oder_Wort.length+9)+"</b> "+(az==1 ? (ohne_t == "" ? "" : "<BR>("+Seiten_in_denen_dieser_Ausdruck_vorkommt_Txt+ohne_t+(exkt ? "" : " - "+Wortanfangsuche_Wort+")")) : "<BR>("+Seiten_in_denen_mindestens_einer_der_Txt+(az==2 ? beiden_Wort : az)+ausdruecke_vorkommt_Txt+ohne_t+(exkt ? "" : " - "+Wortanfangsuche_Wort+")")))
                return
        }
        else if (exkt) {
                var befehl=""
                for (x=0; x<und.length; x++) {
                        befehl=befehl+","+und[x].replace(/"/g,"")
                        suchenach+="</B> "+und_Wort+" <B>"+html(und[x].replace(/"/g,""))
                }
                ueber=Suche_nach_Txt+": <b>"+suchenach.substr(und_Wort.length+9)+"</b> "+(az==1 ? (ohne0>"" ? "<BR>("+Seiten_in_denen_dieser_Ausdruck_vorkommt_Txt+ohne_t+")" : "") : "<BR>("+Seiten_in_denen_Txt+(az==2 ? beide_Wort : alle_Wort+az)+ausdruecke_vorkommen_Txt+ohne_t+exakte_Suche_Txt)
                if (zsg) ueber=Suche_nach_Txt+": &laquo;"+html(zsg[0]).bold()+zsg_ausdruck_vorkommt_Txt+ohne_t+")<P>"
                zeige(vgl(befehl.substr(1)),ueber)
                return
        }
        indzz = new Array()
        for (x=1; x<=und.length; x++) indzz[x]=false
        indz = new Array()
        for (x=0; x<und.length; x++) suchenach+="</B> "+und_Wort+" <B>"+html(und[x].replace(/"/g,""))
//        alert(suchenach)
        ueber=Suche_nach_Txt+": <b>"+suchenach.substr(und_Wort.length+9)+"</b> "+(az==1 ? (ohne0>"" ? "<BR>("+Seiten_in_denen_dieser_Ausdruck_vorkommt_Txt+ohne_t+Wortanfaenge_Txt : "") : "<BR>("+Seiten_in_denen_Txt+(az==2 ? beide_Wort : alle_Wort+az)+ausdruecke_vorkommen_Txt+ohne_t+Wortanfaenge_Txt)
        if (zsg) ueber=Suche_nach_Txt+": &laquo;"+html(zsg[0]).bold()+zsg_ausdruck_vorkommt_Txt+ohne_t+Wortanfaenge_Txt+"<P>"
        vgla=1
        if (zeigedetails && !zsg) {
                to=vgl_a_d(und.join(","))
        }
        else to=vgl_a(und.join(","))
        zeige(to,ueber)
}

function Konfigurieren(ausgabe) {
        if (nc45) {
                if (!top.window.name.match(/0s$/)) {
                        top.window.name+="0s"
                        top.history.go(0)
                        return
                }
                else {
                        top.window.name=top.window.name.replace(/0s$/,"")
                }
        }
        ausgabe="<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n<html>\n<head>\n<title>SELFHTML: Suche</title>\n<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=iso-8859-1\">\n<style type=\"text/css\">\n<!--\ntd {text-align:left;\nfont-size:10pt;\nfont-family:\"Arial\"; }\ntd.zentriert {text-align:center}\nth {text-align:center;\nfont-size:12pt;\nfont-weight:bold;\nfont-family:\"Arial\";}\n.Meldung {\nfont-size:13pt;\nfont-family:\"Arial\"}\n-->\n</style>\n<script language=\"JavaScript\" type=\"text/javascript\">\nfunction alle(temp) {\n        ff=document.forms[\"Einstellungen\"][\"Teilarchiv\"]\n        for (x=0; x<ff.length; x++) if (document.layers || !ff[x].disabled) "
        ausgabe+="ff[x].checked=temp\n}\nfunction uo() {\n        return true\n}\n</script>\n<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//matomo.boitasite.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
</head>\n\n<body bgcolor=white>\n<DIV ALIGN=\"Center\">\n<form NAME=\"Einstellungen\" action=\"#\">\n<table cellpadding=\"0\" cellspacing=\"1\" border=\"0\" bgcolor=\"silver\" WIDTH=\"70%\"><tr><td>\n<TABLE BORDER=\"0\" CELLPADDING=\"5\" cellspacing=\"1\">\n<TR>\n<TH bgcolor=\"#E4EEFF\" COLSPAN=\"2\">&nbsp;<BR><B>Maximale Trefferzahl pro Seite</B><BR>&nbsp;\n</TH>\n</TR>\n<TR><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\">&nbsp;"+trefferliste()+"</TD><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\" WIDTH=\"50%\">&nbsp;\n</TD></TR>\n<TR>\n<TH bgcolor=\"#E4EEFF\" COLSPAN=\"2\">&nbsp;<BR><B>Ausgabeformat</B><BR>&nbsp;\n</TH>\n</TR>\n<TR><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\">\n<input type=radio name=\"Detail\" "+(zeigedetails ? "Checked " : "")+"value=\"1\">"
        ausgabe+="<span onClick=\"uo(true)\">Detailliert</span>\n<input type=radio name=\"Detail\" "+(zeigedetails ? "" : "Checked ")+"value=\"0\"><span onClick=\"uo(false)\">Einfach</span>\n</TD><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\" WIDTH=\"50%\">Hier k&ouml;nnen Sie einstellen, ob bei der \"Wortanfang\"- und \"Oder\"-Suche auch die in den Dokumenten vorkommenden zutreffenden Suchbegriffe angezeigt werden sollen (detailliert) oder nicht (einfach).\n</TD></TR>\n<TR>\n<TH bgcolor=\"#E4EEFF\" COLSPAN=\"2\">&nbsp;<BR><B>gefundene Dateien &ouml;ffnen...</B><BR>&nbsp;\n</TH>\n</TR>\n<TR><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\">\n<input type=radio name=\"oef\" "+(oeffnen==0 ? "Checked " : "")
        ausgabe+="value=\"1\"><span onClick=\"uo(true)\">im gleichen Frame</span><BR>\n<input type=radio name=\"oef\" "+(oeffnen==1 ? "Checked " : "")+"value=\"0\"><span onClick=\"uo(false)\">in einem zweiten Fenster</span><BR>\n<input type=radio name=\"oef\" "+(oeffnen==2 ? "Checked " : "")+"value=\"0\"><span onClick=\"uo(false)\">jeweils in neuen Fenstern</span>\n</TD><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\" WIDTH=\"50%\">Hier k&ouml;nnen Sie einstellen, wo die sich die Dokumente &ouml;ffnen, wenn Sie in der Ergebnisliste auf die &Uuml;berschrift klicken.<BR><BR>&nbsp;\n</TD></TR>\n"
        ausgabe+="<TR>\n<TH bgcolor=\"#E4EEFF\" COLSPAN=\"2\">&nbsp;<BR><B>Schriftformatierung</B><BR>&nbsp;\n</TH>\n</TR>\n<TR><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\">\n<input type=radio name=\"fett\" "+(f1=="<B>" ? "Checked " : "")+"value=\"1\"><span onClick=\"uo(true)\">fett</span><BR>\n<input type=radio name=\"fett\" "+(f1!="<B>" ? "Checked " : "")+"value=\"0\"><span onClick=\"uo(false)\">normal</span>\n</TD><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\" WIDTH=\"50%\">Hier k&ouml;nnen Sie einstellen, ob die Treffer mit fetter oder normaler Schriftst&auml;rke ausgegeben werden.<BR><BR>&nbsp;"+((ie4mz) ? "" : "<input type=\"hidden\" name=\"bunt2\" value=\"\">")+"\n</TD></TR>\n"
        if (ie4mz) ausgabe+="<TR>\n<TH bgcolor=\"#E4EEFF\" COLSPAN=\"2\">&nbsp;<BR><B>Treffermarkierung</B><BR>&nbsp;\n</TH>\n</TR>\n<TR><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\">\n<input type=radio name=\"bunt2\" "+(!bunt ? "Checked " : "")+"value=\"0\"><span onClick=\"uo(true)\">einfarbig</span><BR>\n<input type=radio name=\"bunt2\" "+(bunt ? "Checked " : "")+"value=\"1\"><span onClick=\"uo(false)\">bunt</span>\n</TD><TD bgcolor=\"#E4EEFF\" VALIGN=\"top\" WIDTH=\"50%\">Wenn Sie ein gefundenes Dokument ge�ffnet haben, k�nnen Sie darin mit der obigen Schaltfl�che \"Treffer markieren\" die Suchbegriff optisch hervorheben lassen. Hier k�nnen Sie einstellen, ob f�r alle Begriffe die gleiche oder mehrere Farben (\"bunt\") benutzt werden sollen.<BR><BR>&nbsp;\n</TD></TR>\n"
        ausgabe+="<TR>\n<TD bgcolor=\"#E4EEFF\" CLASS=\"zentriert\" COLSPAN=\"2\"><input type=button onClick=\"parent.frames['Suche'].einstellungen(this.form.Detail[0].checked,this.form.Anzeigen.options[this.form.Anzeigen.options.selectedIndex].value,this.form.oef,this.form.fett,this.form.bunt2)\" name=\"Einstellungenuebernehmen\" value=\"Einstellungen �bernehmen\">\n</TD></TR>\n<TR><TD bgcolor=\"#E4EEFF\" COLSPAN=\"2\">&nbsp;<FONT FACE=\"Arial\" Size=\"-2\"><I>Hinweis: zum Speichern der Einstellungen auf der Festplatte werden <img src=\""+archiv+dokumentgrafik+" width=\"15\" height=\"10\" border=\"0\" alt=\"Seite\">&nbsp;</i><a href=\""+archiv+"javascript/objekte/document.htm#cookie\"><b>Cookies</b></a><i> verwendet.</I></FONT></TD></TR>\n</table></td></tr></table></Form></DIV>\n</body>\n"

        with (parent.frames['Anzeige'].document) {
                write(ausgabe)
                write("</html>")
                close()
        }
}

function Pruefe() {
        if (window.opera || navigator.userAgent.indexOf("Konquerer")>-1) {
                alert(Inkompatibler_Browser_Txt)
                return
        }
        ttu=parent.frames['Anzeige'].location.href
        window.defaultStatus = Suche_laeuft_Txt
        suche0=document.Suchfeld.Suchenach.value
        if (suche0.length < 1) {
                alert(Mindestens_ein_Zeichen_Txt)
                document.Suchfeld.Suchenach.focus()
        }
        else {
                formular_auswerten(suche0)
        }
}

function formular_auswerten(suche0) {
        if (mz5) {
                parent.frames['Anzeige'].location.href="warten.htm"
        }
        else if (window.location.protocol == "http:") {
                with (parent.frames['Anzeige'].document) {
                        writeln("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">\n<html><head>")
                        writeln("<meta http-equiv=\"content-type\" content=\"text/html; charset=ISO-8859-1\">")
                        writeln("<link rel=\"stylesheet\" type=\"text/css\" href=\"../../src/selfhtml.css\">")
                        writeln("<title>"+Bitte_warten_Txt+"</title><!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//matomo.boitasite.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
</head>")
                        writeln("<body bgcolor=\"#FFFFFF\" text=\"#000000\" link=\"#AA5522\" vlink=\"#772200\" alink=\"#000000\">")
                        writeln("<p>"+Suche_bitte_warten_Txt+"</p></body></html>")
                        close()
                }
        }
        suche=""
        af= new Array()
        if (nc45) document.layers.LadeBereich.w= new Array()
        else parent.w= new Array()
        indokg=new Array()
        itext= new Array()
        und_=-1
        ngf=false
        suchenach=""
        vgla=0
        odera=0
        ergebniszaehler=0
        mmm=0
        minus=0
        zwischenergebnis=0
        zngf=0
        lx=0
        seitenbeginn=new Array()
        seiteaktuell=1
        ohne_t=""
        zld=new Array()
        zldn=0
        nd= new Array()
        nd[1]=2
        aktuellerindex=1
        suche = escape(suche0.toLowerCase().replace(/<\//g,"_st_").replace(/\$_/g,"_di_")).replace(/\.|%2C|%3B|%21|%3A|@|\/|\*/g," ").replace(/(%20)+/g," ").replace(/^(\w+)-(\w+)/g,"%22$1 $2%22").replace(/_st_/g,"</").replace(/_di_/g,"%24_")
        suche=suche.replace(/  +/g," ")
        suche=suche.replace(/ $/,"").replace(/^ /,"")
        und = suche.split(" ")
        und.sort()
        bergel=","
        if (!nc45) parent.frames['x'].document.open()
        for (t in und) {
                und[t]=und[t].replace(/(%22)|^-/g,"")
                if (und[t] != "%20") indexladen(nd[aktuellerindex],und[t])
        }
        if (nc4) {
                if (nc45) document.layers.LadeBereich.hinauf()
                und= new Array()
                Suche(suche)
        }
        else {
                if (zldn>0) {
                        hl=zld[0].split("@")
                        zldn2=1
                        laden(hl[0],hl[1],hl[2])
                }
        }
}

function indexladen(teil,temp,x) {
        if (nc4) {
                indexladen_nc4(teil,temp)
                return
        }
        temp=temp.replace(/^-/,"")
        temp2=temp.substr(0,1)
        if (!i[teil][temp2]) return
        indx=i[teil][temp2].split(",")
        if (indx[1] == "%22") {  //Netscape-Fehler
                erstes=indx.shift()
                indx.shift()
                indx.unshift(erstes)
        }
        insg=0
        for (x in indx) {
                if (temp.replace(/_/g,"~") < indx[x]) {
                        if (x==0) x=1
                        zld[zldn++]=teil+"@"+temp2+"@"+x
                        if (temp != indx[x].substr(0,temp.length)) {
                                insg=1
                                break
                        }
                }
        }
        if (insg==0) zld[zldn++]=teil+"@"+temp2+"@"+(indx.length-1)
}

function laden(teil,temp,temp2,hin) {
        lx++
        if (temp=="_") temp="__"
        if (temp=="%") temp="_"
        if (bergel.indexOf(","+temp+temp2+",")==-1) {
                ini="\""
                ini+="index"+nd[aktuellerindex]+"\/"+temp+temp2+".js\""
                parent.frames['x'].document.writeln("<script language=\"JavaScript\" src="+ini+" type=\"text\/javascript\"><\/script><p>&nbsp;<p><script language=\"JavaScript\" src=\"index2/w.js\" type=\"text\/javascript\"><\/script>")
                bergel+=temp+temp2+","
        }
        else parent.frames['x'].document.writeln("<script language=\"JavaScript\" src=\"index2/w.js\" type=\"text\/javascript\"><\/script>")
}

function indexladen_nc4(teil,temp,x) {
        temp=temp.replace(/^-/,"")
        temp2=temp.substr(0,1)
        if (!i[teil][temp2]) return
        indx=i[teil][temp2].split(",")
        if (indx[1] == "%22") {  //Netscape-Fehler
                erstes=indx.shift()
                indx.shift()
                indx.unshift(erstes)
        }
        insg=0
        for (x in indx) {
                if (temp.replace(/_/g,"~") < indx[x]) {
                        if (x==0) x=1
                        laden_nc4(teil,temp2,x)
                        if (temp != indx[x].substr(0,temp.length)) {
                                insg=1
                                break
                        }
                }
        }
        if (insg==0) laden_nc4(teil,temp2,indx.length-1)
}

function laden_nc4(teil,temp,temp2,hin) {
        lx++
        if (temp=="_") temp="__"
        if (temp=="%") temp="_"
        if (bergel.indexOf(","+temp+temp2+",")==-1) {
                ini="\""
                ini+="index"+nd[aktuellerindex]+"\/"+temp+temp2+".js\""
                if (nc45) {
                        with (document.layers.LadeBereich) {
                                hole("<script language=\"JavaScript\" src="+ini+" type=\"text\/javascript\"><\/script>")
                                src="leer.htm"
                        }
                }
                else parent.frames['x'].document.writeln("<script language=\"JavaScript\" src="+ini+" type=\"text\/javascript\"><\/script>")
                bergel+=temp+temp2+","
        }
}

function Eingabe() {
        Pruefe()
        return false
}

function neusuche(temp) {
        document.forms[0].elements[0].value=temp
        top.frames['Suche'].document.Suchfeld.Suchenach.focus()
}

function Sprung(temp) {
        if (temp.match(/^"[^"]*"$/)) {
                return temp.replace(/"$|^"/g,"")
        }
        else {
                return temp.replace(/ .*|"/g,"")
        }
}

function Aendern(zwt,y) {
        ausdr=""
        if (ie4 && !ie5) zwt=parent.frames['Anzeige'].document.all.tags("body")[0].innerHTML
        else zwt=parent.frames['Anzeige'].document.getElementsByTagName("body")[0].innerHTML
        if (bunt) {
                for (x=0; x<und.length; x++) {
                        ausdr="/\\b("+unescape(und[x].replace(/%3[CE]/g,"").replace(/a/g,"[a���]").replace(/e/g,"[e���]").replace(/i/g,"[i���]").replace(/o/g,"[o���]").replace(/u/g,"[u���]").replace(/�/g,"[�s]+"))+")/gi"
                        zwt=zwt.replace(eval(ausdr),"<SPAN STYLE=\"background-color:"+farbe[x % 5]+"; color:black\">$1</SPAN>")
                }
        }
        else {
                for (x=0; x<und.length; x++) if (und[x]>"") ausdr+="|"+und[x]
                ausdr="/\\b("+unescape(ausdr.replace(/%3[CE]/g,"").replace(/a/g,"[a���]").replace(/e/g,"[e���]").replace(/i/g,"[i���]").replace(/o/g,"[o���]").replace(/u/g,"[u���]").replace(/�/g,"[�s]+").substr(1))+")/gi"
                zwt=zwt.replace(eval(ausdr),"<SPAN STYLE=\"background-color:"+farbe[0]+"; color:black\">$1</SPAN>")
        }
        for (y=0; y<2; y++) zwt=zwt.replace(/(<[^>]*)<SPAN STYLE="background-color:[^;]*; color:black">([^<]*)<\/SPAN>/g,"$1$2")
        if (ie4 && !ie5) parent.frames['Anzeige'].document.all.tags("body")[0].innerHTML=zwt
        parent.frames['Anzeige'].document.getElementsByTagName("body")[0].innerHTML=zwt
        if (mz5) parent.frames['Anzeige'].focus()
}

function uo(temp) {
        with (document.Suchfeld) {
                UNDODER[0].checked=temp
                UNDODER[1].checked=(!temp)
        }
}

function ex(temp) {
        with (document.Suchfeld) {
                EXAKT[0].checked=temp
                EXAKT[1].checked=(!temp)
        }
}

function nachladen(to) {
        aktuellerindex++
        if (!nd[aktuellerindex]) return "---"
        af= new Array()
        parent.w= new Array()
        ngf=false

        bergel=","
        if (!nc45) parent.frames['x'].document.open()
        for (t in und) {
                und[t]=und[t].replace(/%22|^-/g,"")
                if (und[t] != "%20") indexladen(nd[aktuellerindex],und[t])
        }
        ohne2=ohne0.substr(1).split(",")
        for (t in ohne2) {
                if (ohne2[t] != "%20") indexladen(nd[aktuellerindex],ohne2[t])
        }
        if (nc45) document.layers.LadeBereich.hinauf()
        window.defaultStatus = Suche_laeuft_Txt
        if (ohne0>"") {
                if (exkt) ohne1+=oder_e(ohne0.substr(1)).replace(/^\+/,"")
                else ohne1+=oder_a(ohne0.substr(1),true).replace(/^\+/,"")
        }

        if (oder_s) {
                if (odera) {
                        if (zeigedetails)        to=oder_a_d(und.join(","))
                        else to=oder_a(befehl.substr(1))
                }
                else to=oder(und)
        }
        else if (exkt) to=vgl(und.join(","))
        else {
                if (zeigedetails) to=vgl_a_d(und.join(","))
                else to=vgl_a(und.join(","))
        }
        return to
}

function abfolge(x,y) {
        nd= new Array()
        x=20
        y=1
        while (x>1) {
                x--
                if (aktiv[x]) nd[y++]=x
        }
}

function einstellungen_alt(ausf,anzahl,oef,fett,bunt2,bunt3,x) {
        zeigedetails=ausf
        bildschirm=anzahl
        for (x=0; x<3; x++) if (oef[x].checked) oeffnen=x
        if (fett[0].checked) {
                f1="<B>"
                f2="</B>"
        }
        else {
                f1=""
                f2=""
        }
        bunt3=""
        if (ie4mz) {
                bunt=(bunt2[0].checked ? 0 : 1)
                bunt3="_"+bunt
        }
   var cook = (ausf ? 1 : 0)+"_"+anzahl+"_"+oeffnen+"_"+(fett[0].checked ? 1 : 0)+bunt3
   var Verfall = 1000*60*60*24*365
   var jetzt = new Date()
   var Auszeit = new Date(jetzt.getTime() + Verfall);
   document.cookie = Cookie_Name+"="+cook+"; expires="+Auszeit.toGMTString()+";"
        alert(Einstellungen_ab_naechste_Suche_gueltig_Txt)
        if (nc45) parent.frames['Anzeige'].location.href="unten.htm"
        document.Suchfeld.Suchenach.focus()
}

function trefferliste(temp,x) {
        tr = new Array(10,20,30,50,75,100,150)
        temp="<select name=\"Anzeigen\" size=1>"
        for (x=0; x<tr.length; x++) temp+="<option "+(bildschirm==tr[x] ? "selected " : "")+"value='"+tr[x]+"'>"+tr[x]
        return temp+"</select> "+Treffer_Wort
}

function html(temp) {
        return unescape(temp).replace(/</g,"&lt;").replace(/>/g,"&gt;")
}

function einst_bel() {
        with (parent.frames['Anzeige'].document.Einstellungen) {
                Anzeigen.value=bildschirm
                Detail[0].checked=zeigedetails
                Detail[1].checked=(!Detail[0].checked)
                oef[0].checked=(oeffnen==0)
                oef[1].checked=(oeffnen==1)
                oef[2].checked=(oeffnen==2)
                SFormat[0].checked=(f1=="<B>")
                SFormat[1].checked=(!SFormat[0].checked)
                bunt2.value=bunt
        }
}

function einstellungen(ausf,anzahl,oef,fett,bunt2,schrift,pfad,bunt3,x) {
        if (ausf !=99) {
                zeigedetails=ausf
                bildschirm=anzahl
                for (x=0; x<3; x++) if (oef[x].checked) oeffnen=x
                if (fett[0].checked) {
                        f1="<B>"
                        f2="</B>"
                }
                else {
                        f1=""
                        f2=""
                }
                bunt3="_0"
                bunt=bunt2
                bunt3="_"+bunt
           var cook = (ausf ? 1 : 0)+"_"+anzahl+"_"+oeffnen+"_"+(fett[0].checked ? 1 : 0)+bunt3
           var Verfall = 1000*60*60*24*365
           var jetzt = new Date()
           var Auszeit = new Date(jetzt.getTime() + Verfall)
           document.cookie = Cookie_Name+"="+cook+"; expires="+Auszeit.toGMTString()+";"
        }
        if (nc45) parent.frames['Anzeige'].location.href="unten.htm"
        else parent.frames['Anzeige'].location.href="unten.htm"
        document.Suchfeld.Suchenach.focus()
}


Public Class ques1
    Dim con As System.Data.OleDb.OleDbConnection
    Dim cmd As System.Data.OleDb.OleDbCommand
    Dim dr As System.Data.OleDb.OleDbDataReader
    Dim sql As String
    Dim qq As Integer
    Dim aa, pa As Integer
    Dim ans As Boolean
    Dim ti As Boolean
    Dim tim As Integer
    Dim a, b, c, d As Integer
    Dim stsp As Boolean
    Dim cur As Char
    Dim image As Bitmap
    Dim time As Integer
    Private Sub ques1_Load(sender As Object, e As EventArgs) Handles MyBase.Load

        cur = "A"
        te1.ForeColor = Color.Lime
        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
        con.Open()
        qq = 1

        sql = "select * from questions1 where num = " & qq & ""
        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
        dr = cmd.ExecuteReader()
        If dr.HasRows = True Then
            While dr.Read()
                que1.Text = dr(0)
            End While
        End If
        time = 45
        timer.Text = "45"
        con.Close()
        ans = False
        ti = False
        a = 0
        b = 0
        c = 0
        d = 0
        pa = 0
        sc1.Text = 0
        sc2.Text = 0
        sc3.Text = 0
        sc4.Text = 0
    End Sub
    Private Sub ques1_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        Select Case e.KeyCode
            Case Keys.Q
                If ans = True Then
                    If qq < 12 Then
                        pa = 0
                        ans = False
                        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                        con.Open()
                        qq = qq + 1
                        sql = "select * from questions1 where num = " & qq & ""
                        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                        dr = cmd.ExecuteReader()
                        If dr.HasRows = True Then
                            While dr.Read()
                                que1.Text = dr(0)
                            End While
                            ti = False
                            ans1.Text = ""
                            time = 45
                            timer.Text = "45"
                            Select Case cur
                                Case "A"
                                    te1.ForeColor = Color.Turquoise
                                Case "B"
                                    te2.ForeColor = Color.Turquoise
                                Case "C"
                                    te3.ForeColor = Color.Turquoise
                                Case "D"
                                    te4.ForeColor = Color.Turquoise
                            End Select
                            If qq Mod 4 = 0 Then
                                'team1.Text = "D"
                                cur = "D"
                                te4.ForeColor = Color.Lime

                            ElseIf qq Mod 4 = 1 Then
                                'team1.Text = "A"
                                cur = "A"
                                te1.ForeColor = Color.Lime
                            ElseIf qq Mod 4 = 2 Then
                                'team1.Text = "B"
                                cur = "B"
                                te2.ForeColor = Color.Lime
                            ElseIf qq Mod 4 = 3 Then
                                'team1.Text = "C"
                                cur = "C"
                                te3.ForeColor = Color.Lime
                            End If
                        End If
                        con.Close()
                    End If
                End If


            Case Keys.A
                If time > 0 Then
                    If ti = True Then
                        If qq > aa Then
                            If aa < 12 Then
                                ti = False
                                tl1.Stop()


                                ans = True
                                stsp = False
                                con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                                con.Open()
                                aa = qq
                                sql = "select * from questions1 where num = " & aa & ""
                                cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                                dr = cmd.ExecuteReader()
                                If dr.HasRows = True Then
                                    While dr.Read()
                                        ans1.Text = dr(1)
                                    End While
                                End If

                                con.Close()

                                Select Case pa
                                    Case 0
                                        Select Case cur
                                            Case "A"
                                                a = a + 30
                                            Case "B"
                                                b = b + 30
                                            Case "C"
                                                c = c + 30
                                            Case "D"
                                                d = d + 30

                                        End Select

                                    Case 1
                                        Select Case cur
                                            Case "A"
                                                a = a + 20
                                            Case "B"
                                                b = b + 20
                                            Case "C"
                                                c = c + 20
                                            Case "D"
                                                d = d + 20

                                        End Select

                                    Case 2
                                        Select Case cur
                                            Case "A"
                                                a = a + 20
                                            Case "B"
                                                b = b + 20
                                            Case "C"
                                                c = c + 20
                                            Case "D"
                                                d = d + 20

                                        End Select

                                    Case 3
                                        Select Case cur
                                            Case "A"
                                                a = a + 20
                                            Case "B"
                                                b = b + 20
                                            Case "C"
                                                c = c + 20
                                            Case "D"
                                                d = d + 20

                                        End Select

                                End Select
                                sc1.Text = a
                                sc2.Text = b
                                sc3.Text = c
                                sc4.Text = d
                            End If
                        End If
                    End If
                End If


            Case Keys.P
                If ans = False Then
                    If qq > aa Then
                        If ti = True Then
                            pa = pa + 1

                            If pa < 4 Then
                                time = "15"
                                timer.Text = "15"
                                tl1.Enabled = True
                                stsp = False
                                 Select cur
                                    Case "A"
                                        te1.ForeColor = Color.Turquoise
                                    Case "B"
                                        te2.ForeColor = Color.Turquoise
                                    Case "C"
                                        te3.ForeColor = Color.Turquoise
                                    Case "D"
                                        te4.ForeColor = Color.Turquoise
                                End Select
                                Select Case cur
                                    Case "A"
                                        'team1.Text = "B"
                                        cur = "B"

                                        te2.ForeColor = Color.Lime
                                    Case "B"
                                        cur = "C"
                                        'team1.Text = "C"
                                        te3.ForeColor = Color.Lime

                                    Case "C"
                                        cur = "D"
                                        'team1.Text = "D"
                                        te4.ForeColor = Color.Lime

                                    Case "D"
                                        cur = "A"
                                        'team1.Text = "A"
                                        te1.ForeColor = Color.Lime

                                End Select

                            ElseIf pa = 4 Then
                                con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                                con.Open()
                                aa = qq
                                tl1.Stop()


                                ans = True
                                stsp = False
                                ti = False
                                sql = "select * from questions1 where num = " & aa & ""
                                cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                                dr = cmd.ExecuteReader()
                                If dr.HasRows = True Then
                                    While dr.Read()
                                        ans1.Text = dr(1)
                                    End While
                                End If
                                My.Computer.Audio.Play(My.Resources.wans, AudioPlayMode.Background)
                                con.Close()
                            End If

                        End If
                    End If
                End If

            Case Keys.T
                If stsp = False Then
                    If ans = False Then
                        ti = True
                        tl1.Enabled = True

                        stsp = True
                    End If

                ElseIf stsp = True Then
                    ti = False
                    tl1.Stop()

                    stsp = False
                End If


            Case Keys.S
                If aa > 11 Then
                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    sql = "update points1 set points='" & a & "'where team='a'"
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    cmd.ExecuteNonQuery()
                    sql = "update points1 set points='" & b & "'where team='b'"
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    cmd.ExecuteNonQuery()
                    sql = "update points1 set points='" & c & "'where team='c'"
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    cmd.ExecuteNonQuery()
                    sql = "update points1 set points='" & d & "'where team='d'"
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    cmd.ExecuteNonQuery()
                    con.Close()
                    scor1.Show()
                    Me.Hide()
                End If

            Case Keys.Back


        End Select
    End Sub

    
    Private Sub tl1_Tick(sender As Object, e As EventArgs) Handles tl1.Tick
        If time > 0 Then

            time = time - 1
            My.Computer.Audio.Play(My.Resources.tk, AudioPlayMode.Background)
            timer.Text = time

        ElseIf time = 0 Then

            'tl1.Enabled = False
            If ans = False Then
                If qq > aa Then
                    If ti = True Then
                        pa = pa + 1

                        If pa < 4 Then
                            My.Computer.Audio.Play(My.Resources._end, AudioPlayMode.Background)
                            time = "15"
                            timer.Text = "15"
                            tl1.Enabled = True
                            stsp = False
                            Select Case cur
                                Case "A"
                                    te1.ForeColor = Color.Turquoise
                                Case "B"
                                    te2.ForeColor = Color.Turquoise
                                Case "C"
                                    te3.ForeColor = Color.Turquoise
                                Case "D"
                                    te4.ForeColor = Color.Turquoise
                            End Select
                            Select Case cur
                                Case "A"
                                    'team1.Text = "B"
                                    cur = "B"

                                    te2.ForeColor = Color.Lime
                                Case "B"
                                    cur = "C"
                                    'team1.Text = "C"
                                    te3.ForeColor = Color.Lime

                                Case "C"
                                    cur = "D"
                                    'team1.Text = "D"
                                    te4.ForeColor = Color.Lime

                                Case "D"
                                    cur = "A"
                                    'team1.Text = "A"
                                    te1.ForeColor = Color.Lime

                            End Select

                        ElseIf pa = 4 Then
                            con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                            con.Open()
                            aa = qq
                            tl1.Stop()


                            ans = True
                            stsp = False
                            ti = False
                            sql = "select * from questions1 where num = " & aa & ""
                            cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                            dr = cmd.ExecuteReader()
                            If dr.HasRows = True Then
                                While dr.Read()
                                    ans1.Text = dr(1)
                                End While
                            End If
                            My.Computer.Audio.Play(My.Resources.wans, AudioPlayMode.Background)
                            con.Close()
                        End If

                    End If
                End If
            End If
        End If
   
    End Sub


    Private Sub te2_Click(sender As Object, e As EventArgs) Handles te2.Click

    End Sub
End Class

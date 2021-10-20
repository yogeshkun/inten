arr = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
for i in range(0,1,2):
    for j in range(0,1,2):
        for k in range(0,1,2):
            for l in range(0,1,2):
                if i==j==k==l:
                    pass
                if i == 0:
                    if i == 0 and j == 0:
                        arr[1] += 0
                        arr[4   ] += 0
                    if i == 0 and j == 1:
                        arr[1] += 0
                        arr[4] += 1
                    if i == 0 and j == 2:
                        arr[1] += 1
                        arr[4] += 0

                    if i == 0 and k == 0:
                        arr[2] += 0
                        arr[8] += 0
                    if i == 0 and k == 1:
                        arr[2] += 0
                        arr[8] += 1
                    if i == 0 and k == 2:
                        arr[2] += 1
                        arr[8] += 0

                    if i == 0 and l == 0:
                        arr[3] += 0
                        arr[12] += 0
                    if i == 0 and l == 1:
                        arr[3] += 0
                        arr[12] += 1
                    if i == 0 and l == 2:
                        arr[3] += 1
                        arr[12] += 0


                if i == 1:
                    if i == 1 and j == 0:
                        arr[1] += 1
                        arr[4] += 0
                    if i == 1 and j == 1:
                        arr[1] += 0
                        arr[4] += 0
                    if i == 1 and j == 2:
                        arr[1] += 0
                        arr[4] += 1

                    if i == 1 and k == 0:
                        arr[2] += 1
                        arr[8] += 0
                    if i == 1 and k == 1:
                        arr[2] += 0
                        arr[8] += 0
                    if i == 1 and k == 2:
                        arr[2] += 0
                        arr[8] += 1

                    if i ==1  and l == 0:
                        arr[3] += 1
                        arr[12] += 0
                    if i == 1 and l == 1:
                        arr[3] += 0
                        arr[12] += 0
                    if i ==1  and l == 2:
                        arr[3] += 0
                        arr[12] += 1


                if i == 2:
                    if i == 2 and j == 0:
                        arr[1] += 1
                        arr[4] += 0
                    if i == 2 and j == 1:
                        arr[1] += 0
                        arr[4] += 0
                    if i == 2 and j == 2:
                        arr[1] += 0
                        arr[4] += 1

                    if i == 2 and k == 0:
                        arr[2] += 1
                        arr[8] += 0
                    if i == 2 and k == 1:
                        arr[2] += 0
                        arr[8] += 0
                    if i == 2 and k == 2:
                        arr[2] += 0
                        arr[8] += 1

                    if i == 2 and l == 0:
                        arr[3] += 1
                        arr[12] += 0
                    if i == 0 and l == 1:
                        arr[3] += 0
                        arr[12] += 0
                    if i == 0 and l == 2:
                        arr[3] += 0
                        arr[12] += 1
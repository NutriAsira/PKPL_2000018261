#package
from ai_pkg.search import Graph, Problem, Node #NUTRI ASIRA 2000018261
from ai_pkg.utils import random, argmax_random_tie

#variable
cityMapDestination = Graph(dict(
    Kraton=dict(Kraton=0, Bantul=211, Sewon=82, KotaGede=169, Umbulharjo=81, Pakualaman=99),
    Bantul=dict(Kraton=211, Bantul=0, Sewon=101, KotaGede=152, Umbulharjo=186, Pakualaman=232),
    Sewon=dict(Kraton=82, Bantul=101, Sewon=0, KotaGede=138, Umbulharjo=97, Pakualaman=143),
    KotaGede=dict(Kraton=169, Bantul=152, Sewon=138, KotaGede=0, Umbulharjo=146, Pakualaman=175),
    Umbulharjo=dict(Kraton=81, Bantul=186, Sewon=97, KotaGede=146, Umbulharjo=0, Pakualaman=80),
    Pakualaman=dict(Kraton=99, Bantul=232, Sewon=143, KotaGede=175, Umbulharjo=80, Pakualaman=0)),
    directed=False)
distances = {}
#name class from package
class TSP_problem(Problem):
    #method
    def generateNeighbour(self, state):
        neighbourState = state[:]
        leftCity = random.randint(0, len(neighbourState) - 1)
        rightCity = random.randint(0, len(neighbourState) - 1)
        if leftCity > rightCity:
            leftCity, rightCity = rightCity, leftCity
        neighbourState[leftCity: rightCity + 1] = reversed(neighbourState[leftCity: rightCity + 1])
        return neighbourState
    #method
    def actions(self, state):
        return [self.generateNeighbour]
    #method
    def result(self, state, action):
        return action(state)
    #method
    def pathCost(self, state):
        cost = 0
        for index in range(len(state) - 1):
            currentCity = state[index]
            nextCity = state[index + 1]
            cost += distances[currentCity][nextCity]
        cost += distances[state[0]][state[-1]]
        return cost
    #method
    def value(self, state):
        return -1 * self.pathCost(state)

def hillClimbing(problem):
    def findNeighbour(state, numberOfNeighbours=100):
        neighbors = []
        for index in range(numberOfNeighbours):
            newCity = problem.generateNeighbour(state)
            if newCity[0] == 'Kraton' and newCity[-1] == 'Pakualaman':
                neighbors.append(Node(newCity))
                state = newCity
        return neighbors

    current = Node(problem.initial)
    while True:
        neighbors = findNeighbour(current.state)
        if not neighbors:
            break
        neighbor = argmax_random_tie(neighbors, key=lambda node:problem.value(node.state))
        if problem.value(neighbor.state) <= problem.value(current.state):
            break
        current.state = neighbor.state
    return current.state
# conditional  
if __name__ =='__main__':
    allCities = []
    citiesGraph = cityMapDestination.graph_dict
    #looping
    for cityFirst in citiesGraph.keys():
        distances[cityFirst] = {}
        if(cityFirst not in allCities):
            allCities.append(cityFirst)
        for cityNext in citiesGraph.keys():
            if(citiesGraph.get(cityFirst).get(cityNext) is not None):
                distances[cityFirst][cityNext] = citiesGraph.get(cityFirst).get(cityNext)

    TSPSolution = TSP_problem(allCities)
    result = hillClimbing(TSPSolution)
    print(result)
    cost = TSPSolution.pathCost(result)
    print('cost: ', cost)

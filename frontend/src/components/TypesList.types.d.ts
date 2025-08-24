export interface IDashboardData {
    all: number,
    completed: number,
    in_progress: number,
    outdated: number
}

export interface IMainWorkspaceData {
    project: string,
    block: string,
    floor: number,
    executor: string,
    date_start: Date,
    date_end: Date,
    status: string
}